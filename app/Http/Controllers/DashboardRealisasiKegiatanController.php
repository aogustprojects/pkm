<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\RealisasiKegiatan;

class DashboardRealisasiKegiatanController extends Controller
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

        return view('dashboard.realisasi_kegiatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kegiatans = Kegiatan::all();
        return view('dashboard.realisasi_kegiatan.create', compact('kegiatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kegiatan_id' => 'required|exists:kegiatans,id',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer',
            'target' => 'required|integer|min:0',
            'realisasi' => 'required|integer|min:0',
        ]);

        $validated['persentase'] = $validated['target'] > 0
            ? round(($validated['realisasi'] / $validated['target']) * 100, 2)
            : 0;

        RealisasiKegiatan::create($validated);

        return redirect()->route('dashboard.realisasi-kegiatan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RealisasiKegiatan $realisasiKegiatan)
    {
        return view('dashboard.realisasi_kegiatan.show', compact('realisasiKegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RealisasiKegiatan $realisasiKegiatan)
    {
        $kegiatans = Kegiatan::all();
        return view('dashboard.realisasi_kegiatan.edit', compact('realisasiKegiatan', 'kegiatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RealisasiKegiatan $realisasiKegiatan)
    {
        $validated = $request->validate([
            'kegiatan_id' => 'required|exists:kegiatans,id',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer',
            'target' => 'required|integer|min:0',
            'realisasi' => 'required|integer|min:0',
        ]);

        $validated['persentase'] = $validated['target'] > 0
            ? round(($validated['realisasi'] / $validated['target']) * 100, 2)
            : 0;

        $realisasiKegiatan->update($validated);

        return redirect()->route('dashboard.realisasi-kegiatan.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RealisasiKegiatan $realisasiKegiatan)
    {
        $realisasiKegiatan->delete();
        return redirect()->route('dashboard.realisasi-kegiatan.index')->with('success', 'Data berhasil dihapus.');
    }

    public function showByKegiatan($id)
    {
        $data = RealisasiKegiatan::with('kegiatan')
            ->where('kegiatan_id', $id)
            ->get();

        return view('dashboard.realisasi_kegiatan.index', compact('data'));
    }
}
