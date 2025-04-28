<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\RealisasiKegiatan;
use Illuminate\Http\Request;

class DashboardKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get distinct years from realisasi_kegiatans for the filter dropdown
        $years = RealisasiKegiatan::select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun')
            ->toArray();

        // Default to the current year if no year is selected
        $selectedYear = $request->input('year', now()->year);

        // Fetch Kegiatan records that have a RealisasiKegiatan for the selected year
        $data = Kegiatan::with(['realisasi' => function ($query) use ($selectedYear) {
                $query->where('tahun', $selectedYear);
            }])
            ->whereHas('realisasi', function ($query) use ($selectedYear) {
                $query->where('tahun', $selectedYear);
            })
            ->when($request->search, function ($query, $search) {
                return $query->where('nama_kegiatan', 'like', "%{$search}%");
            })
            ->get();

        return view('dashboard.kegiatan.index', compact('data', 'years', 'selectedYear'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'pj_kegiatan' => 'required|string|max:255',
        ]);

        $kegiatan = Kegiatan::create($validated);

        RealisasiKegiatan::create([
            'kegiatan_id' => $kegiatan->id,
            'tahun' => now()->year,
            'target' => 0,
            'realisasi' => 0,
            'persentase' => 0.00,
            'goals' => [],
            'target_bulanan' => [],
        ]);

        return redirect()->route('dashboard.kegiatan.index')
            ->with('success', 'Kegiatan dan Realisasi awal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Update goals and monthly targets for kegiatan.
     */
    public function updateGoalsAndTargets(Request $request)
    {
        $request->validate([
            'goals' => 'required|array',
            'goals.*.*' => 'nullable|numeric|min:0',
            'target_bulanan' => 'required|array',
            'target_bulanan.*.*' => 'nullable|numeric|min:0',
        ]);

        $goals = $request->input('goals', []);
        $target_bulanan = $request->input('target_bulanan', []);
        $selectedYear = $request->input('year', now()->year);

        foreach ($goals as $kegiatanId => $monthlyGoals) {
            $realisasi = RealisasiKegiatan::firstOrCreate(
                ['kegiatan_id' => $kegiatanId, 'tahun' => $selectedYear],
                ['tahun' => $selectedYear]
            );

            // Update goals
            $realisasi->goals = $monthlyGoals;

            // Update target_bulanan if provided
            if (isset($target_bulanan[$kegiatanId])) {
                $realisasi->target_bulanan = $target_bulanan[$kegiatanId];
            }

            // Calculate realisasi (sum of goals)
            $totalRealisasi = array_sum(array_map('intval', $monthlyGoals));

            // Calculate target (sum of target_bulanan)
            $totalTarget = isset($target_bulanan[$kegiatanId])
                ? array_sum(array_map('intval', $target_bulanan[$kegiatanId]))
                : 0;

            // Calculate persentase
            $persentase = $totalTarget > 0 ? round(($totalRealisasi / $totalTarget) * 100, 2) : 0.00;

            // Update realisasi fields
            $realisasi->realisasi = $totalRealisasi;
            $realisasi->target = $totalTarget;
            $realisasi->persentase = $persentase;

            $realisasi->save();
        }

        return redirect()->back()->with('success', 'Goals dan Target Bulanan berhasil diperbarui!');
    }
}