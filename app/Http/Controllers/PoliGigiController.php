<?php

namespace App\Http\Controllers;

use App\Models\PoliGigi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PoliGigiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = PoliGigi::all();
        return view('poli-gigi', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poli-gigi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Set the maximum number of patients per day
    $maxRegistrationsPerDay = 8;  
    $today = Carbon::now('Asia/Jakarta')->format('Y-m-d'); 

    // Check if NIK already registered today
    $existingEntry = PoliGigi::where('nik', $request->nik)
                            ->whereDate('created_at', $today)
                            ->exists();

    if ($existingEntry) {
        return redirect()->back()->with('error', 'NIK ini sudah terdaftar hari ini. Silakan daftar ulang jam 08.00 di Puskesmas Pasir Jati.');
    }

    // Count how many registrations have been made today
    $currentRegistrations = PoliGigi::whereDate('created_at', $today)->count();

    // Check if the quota has been reached
    if ($currentRegistrations >= $maxRegistrationsPerDay) {
        return redirect()->back()->with('error', 'Pendaftaran untuk hari ini sudah penuh. Silakan daftar besok.');
    }

    // Validate form input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|max:16',
        'status_pasien' => 'required|in:baru,lama',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        'jenis_pasien' => 'required|in:BPJS,Umum',
        'no_bpjs' => 'nullable|required_if:jenis_pasien,BPJS|string|max:13',
        'alamat' => 'required|string|max:500',
    ]);

    // Save new registration if quota is available
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
