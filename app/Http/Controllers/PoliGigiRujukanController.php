<?php

namespace App\Http\Controllers;

use App\Models\PoliGigiRujukan;
use Illuminate\Http\Request;

class PoliGigiRujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all rujukan records
        $rujukans = PoliGigiRujukan::all();
        return view('poli-gigi-rujukan', compact('rujukans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /// Return the view for creating a new rujukan
        return view('poli-gigi-rujukan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'no_rm' => 'required|string|max:255',
            'ttl_umur' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'p_pelaksana' => 'required|string|max:255',
            'pemberi_info' => 'required|string|max:255',
            'penerima_info' => 'required|string|max:255',
            'diagnosis' => 'nullable|string',
            'diagnosis_check' => 'nullable|boolean',
            'nama_tujuan_tindakan' => 'nullable|string',
            'nama_tujuan_tindakan_check' => 'nullable|boolean',
            'indikasi_tindakan' => 'nullable|string',
            'indikasi_tindakan_check' => 'nullable|boolean',
            'tata_cara' => 'nullable|string',
            'tata_cara_check' => 'nullable|boolean',
            'risiko_komplikasi' => 'nullable|string',
            'risiko_komplikasi_check' => 'nullable|boolean',
            'prognosis' => 'nullable|string',
            'prognosis_check' => 'nullable|boolean',
            'alternatif_risiko' => 'nullable|string',
            'alternatif_risiko_check' => 'nullable|boolean',
            'biaya_tindakan' => 'nullable|string',
            'biaya_tindakan_check' => 'nullable|boolean',
            'signature1' => 'nullable|string',
            'signature2' => 'nullable|string',
            'signature3' => 'nullable|string',
            'signature4' => 'nullable|string',
            'signature5' => 'nullable|string',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'persetujuan_tindakan' => 'nullable|in:menyetujui,menolak',
            'tanggal' => 'nullable|date',
            'jam' => 'nullable|date_format:H:i',
        ]);
    
        // Convert checkbox values
        $validatedData['diagnosis_check'] = $request->has('diagnosis_check');
        $validatedData['nama_tujuan_tindakan_check'] = $request->has('nama_tujuan_tindakan_check');
        $validatedData['indikasi_tindakan_check'] = $request->has('indikasi_tindakan_check');
        $validatedData['tata_cara_check'] = $request->has('tata_cara_check');
        $validatedData['risiko_komplikasi_check'] = $request->has('risiko_komplikasi_check');
        $validatedData['prognosis_check'] = $request->has('prognosis_check');
        $validatedData['alternatif_risiko_check'] = $request->has('alternatif_risiko_check');
        $validatedData['biaya_tindakan_check'] = $request->has('biaya_tindakan_check');
    
        dd($validatedData); // Check if the data is correct
        // Create a new record
        PoliGigiRujukan::create($validatedData);
    
        return redirect()->route('poli-gigi-rujukan.index')->with('success', 'Rujukan created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(PoliGigiRujukan $poliGigiRujukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PoliGigiRujukan $poliGigiRujukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PoliGigiRujukan $poliGigiRujukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PoliGigiRujukan $poliGigiRujukan)
    {
        //
    }
}
