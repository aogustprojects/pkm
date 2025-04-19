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
        $query = RealisasiKegiatan::with('kegiatan');

        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->whereHas('kegiatan', function ($q) use ($request) {
                $q->where('nama_kegiatan', 'like', '%' . $request->search . '%');
            });
        }

        $data = $query->get();

        return view('dashboard.kegiatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kegiatans = Kegiatan::all();
        return view('dashboard.kegiatan.create', compact('kegiatans'));
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

        // Create the Kegiatan record
        $kegiatan = Kegiatan::create($validated);

        // Automatically create a RealisasiKegiatan record with default values
        RealisasiKegiatan::create([
            'kegiatan_id' => $kegiatan->id,
            'bulan' => 1, // Default: January
            'tahun' => now()->year, // Default: Current year (2025)
            'target' => 0, // Default: 0
            'realisasi' => 0, // Default: 0
            'persentase' => 0.00, // Default: 0%
        ]);

        return redirect('/dashboard/kegiatan')->with('success', 'Kegiatan dan Realisasi awal berhasil ditambahkan!');
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
}
