<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoliGigi;

class DashboardPoliGigiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poligigi = PoliGigi::paginate(10); // Show 10 records per page
        return view('dashboard.poligigi.index', compact('poligigi'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.poligigi.index', compact('poligigi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|max:16',
        'status_pasien' => 'required|in:baru,lama',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        'jenis_pasien' => 'required|in:BPJS,Umum',
        'no_bpjs' => 'nullable|required_if:jenis_pasien,BPJS|string|max:13',
        'alamat' => 'required|string|max:500',
    ]);

    $poliGigi = new PoliGigi();
    $poliGigi->nama = $validated['nama'];
    $poliGigi->nik = $validated['nik'];
    $poliGigi->status_pasien = $validated['status_pasien'];
    $poliGigi->jenis_kelamin = $validated['jenis_kelamin'];
    $poliGigi->jenis_pasien = $validated['jenis_pasien'];
    $poliGigi->no_bpjs = $validated['jenis_pasien'] === 'BPJS' ? $validated['no_bpjs'] : null;
    $poliGigi->alamat = $validated['alamat'];
    $poliGigi->save();

    return redirect('poli-gigi')->with('success', 'Pendaftaran berhasil!');
    }


    /**
     * Display the specified resource.
     */
    public function show(PoliGigi $poliGigi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PoliGigi $poliGigi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PoliGigi $poliGigi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PoliGigi $poliGigi)
    {
        //
    }
}
