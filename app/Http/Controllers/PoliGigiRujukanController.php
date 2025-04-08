<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PoliGigiRujukan;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StorePoliGigiRujukanRequest;
use App\Http\Requests\UpdatePoliGigiRujukanRequest;

class PoliGigiRujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = PoliGigiRujukan::all();
        return view('poli-gigi-rujukan', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poli-gigi-rujukan');
    }

    /**
     * Store a newly created resource in storage.s
     */
    public function store(Request $request)
    {
            // Ubah umur_sign dari "30 tahun" → 30
        $request->merge([
            'umur_sign' => (int) filter_var($request->umur_sign, FILTER_SANITIZE_NUMBER_INT)
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'no_rm' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'petugas_pel' => 'required|string|max:255',
            'pemberi_info' => 'required|string|max:255',
            'penerima_info' => 'required|string|max:255',
            'diagnosis' => 'nullable|string',
            'nama_tujuan_tindakan' => 'nullable|string|max:255',
            'indikasi_tindakan' => 'nullable|string|max:255',
            'tata_cara' => 'nullable|string|max:255',
            'risiko_komplikasi' => 'nullable|string|max:255',
            'prognosis' => 'nullable|string|max:255',
            'alternatif_risiko' => 'nullable|string|max:255',
            'biaya_tindakan' => 'nullable|string|max:255',
            'signature1' => 'nullable|string',
            'signature2' => 'nullable|string',
            'nama_sign' => 'required|string|max:255',
            'umur_sign' => 'required|integer', // ← Validasi umur_sign sebagai integer
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat_sign' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'persetujuan_tindakan' => 'required|in:menyetujui,menolak',
            'signature3' => 'nullable|string',
            'signature4' => 'nullable|string',
            'signature5' => 'nullable|string',
        ]);

        // Hitung umur berdasarkan tanggal lahir
        $umur = Carbon::parse($request->tanggal_lahir)->age;

        // Simpan ke database
        $rujukan = PoliGigiRujukan::create([
            'name' => $validated['name'],
            'no_rm' => $validated['no_rm'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'umur' => $umur, // umur dihitung otomatis
            'alamat' => $validated['alamat'],
            'petugas_pel' => $validated['petugas_pel'],
            'pemberi_info' => $validated['pemberi_info'],
            'penerima_info' => $validated['penerima_info'],
            'diagnosis' => $validated['diagnosis'] ?? null,
            'nama_tujuan_tindakan' => $validated['nama_tujuan_tindakan'] ?? null,
            'indikasi_tindakan' => $validated['indikasi_tindakan'] ?? null,
            'tata_cara' => $validated['tata_cara'] ?? null,
            'risiko_komplikasi' => $validated['risiko_komplikasi'] ?? null,
            'prognosis' => $validated['prognosis'] ?? null,
            'alternatif_risiko' => $validated['alternatif_risiko'] ?? null,
            'biaya_tindakan' => $validated['biaya_tindakan'] ?? null,
            'signature1' => $validated['signature1'] ?? null,
            'signature2' => $validated['signature2'] ?? null,
            'nama_sign' => $validated['nama_sign'],
            'umur_sign' => $validated['umur_sign'], // umur_sign disimpan sebagai integer
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'alamat_sign' => $validated['alamat_sign'],
            'tanggal' => $validated['tanggal'],
            'jam' => $validated['jam'],
            'persetujuan_tindakan' => $validated['persetujuan_tindakan'],
            'signature3' => $validated['signature3'] ?? null,
            'signature4' => $validated['signature4'] ?? null,
            'signature5' => $validated['signature5'] ?? null,
        ]);

        if ($rujukan) {
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('fail', 'Data gagal disimpan!');
        }
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
    public function update(UpdatePoliGigiRujukanRequest $request, PoliGigiRujukan $poliGigiRujukan)
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
