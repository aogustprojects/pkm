<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PoliGigiRujukan;
use Illuminate\Support\Facades\Storage;

class DashboardPoliGigiRujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch records for the exact selected date (not older)
        $poligigi = PoliGigiRujukan::orderBy('created_at', 'asc')->paginate(10);
    
        return view('dashboard.poligigi_rujukan.index', compact('poligigi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.poligigi_rujukan.index', compact('poligigi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PoliGigiRujukan $poliGigiRujukan)
    {
        return view('dashboard.poligigi_rujukan.show', compact('poliGigiRujukan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PoliGigiRujukan $poliGigiRujukan)
    {
        return view('dashboard.poligigi_rujukan.edit', compact('poliGigiRujukan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
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
        'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
        'tanggal' => 'required|date',
        'jam' => 'required|date_format:H:i',
        'persetujuan_tindakan' => 'required|in:menyetujui,menolak',
        'signature3' => 'nullable|string',
        'signature4' => 'nullable|string',
        'signature5' => 'nullable|string',
    ]);

    $rujukan = PoliGigiRujukan::findOrFail($id);

    $umur = Carbon::parse($validated['tanggal_lahir'])->age;

    $rujukan->update([
        'name' => $validated['name'],
        'no_rm' => $validated['no_rm'],
        'tempat_lahir' => $validated['tempat_lahir'],
        'tanggal_lahir' => $validated['tanggal_lahir'],
        'umur' => $umur,
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
        'jenis_kelamin' => $validated['jenis_kelamin'],
        'tanggal' => $validated['tanggal'],
        'jam' => $validated['jam'],
        'persetujuan_tindakan' => $validated['persetujuan_tindakan'],
        'signature3' => $validated['signature3'] ?? null,
        'signature4' => $validated['signature4'] ?? null,
        'signature5' => $validated['signature5'] ?? null,
    ]);

    return redirect()->back()->with('success', 'Data berhasil diperbarui!');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PoliGigiRujukan $poliGigiRujukan)
    {
        // Check if the file exists before deleting
        if ($poliGigiRujukan->document_path && Storage::exists($poliGigiRujukan->document_path)) {
            Storage::delete($poliGigiRujukan->document_path);
        }

        // Delete the record from the database
        $poliGigiRujukan->delete();

        // Redirect to the index with a success message
        return redirect('/dashboard/poli-gigi-rujukan')->with('success', 'Rujukan berhasil dihapus!');
    }
}
