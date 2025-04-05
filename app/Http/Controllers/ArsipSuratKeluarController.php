<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArsipSuratKeluar;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArsipSuratKeluarRequest;
use App\Http\Requests\UpdateArsipSuratKeluarRequest;

class ArsipSuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        

        $arsipSuratKeluar = ArsipSuratKeluar::when($search, function ($query) use ($search) {
            $query->where('nomor_surat', 'like', "%$search%")
                ->orWhere('pengirim', 'like', "%$search%")
                ->orWhere('perihal', 'like', "%$search%")
                ->orWhere('dikirim_kepada', 'like', "%$search%");
        })->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.arsip_surat_keluar.index', compact('arsipSuratKeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.arsip_surat_keluar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArsipSuratKeluarRequest $request)
    {
        // Validate the incoming request
    $request->validate([
        'tanggal_surat' => 'required|date',
        'nomor_surat' => 'required|string|max:255',
        'pengirim' => 'required|string|max:255',
        'perihal' => 'required|string|max:255',
        'dikirim_kepada' => 'required|string|max:255',
        'lampiran' => 'required|string|max:255',
        'keterangan' => 'required|string|in:biasa,segera',
        'document' => 'nullable|file|mimes:pdf,doc,docx,txt|max:10240', // File size limit
    ]);

    // Store the file if it exists
    $documentPath = null;
    if ($request->hasFile('document') && $request->file('document')->isValid()) {
        $documentPath = $request->file('document')->store('documents', 'public');
    }

    // Create the ArsipSuratMasuk record in the database
    ArsipSuratKeluar::create([
        'tanggal_surat' => $request->tanggal_surat,
        'nomor_surat' => $request->nomor_surat,
        'pengirim' => $request->pengirim,
        'perihal' => $request->perihal,
        'dikirim_kepada' => $request->dikirim_kepada,
        'lampiran' => $request->lampiran,
        'keterangan' => $request->keterangan,
        'document_path' => $documentPath, // Store the file path in the database
    ]);

    // Redirect to the index with a success message
    return redirect('/dashboard/arsip_surat_keluar')->with('success', 'Surat Keluar added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ArsipSuratKeluar $arsipSuratKeluar)
    {
        $documentPath = storage_path('app/public/' . $arsipSuratKeluar->document_path);
    
        // Check if the file exists
        if (!file_exists($documentPath)) {
            abort(404, 'Document not found');
        }
        
        // Check the file type and handle accordingly
        $fileExtension = pathinfo($documentPath, PATHINFO_EXTENSION);
    
        return view('dashboard.arsip_surat_keluar.show', compact('arsipSuratKeluar', 'documentPath', 'fileExtension'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipSuratKeluar $arsipSuratKeluar)
    {
        return view('dashboard.arsip_surat_keluar.edit', compact('arsipSuratKeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArsipSuratKeluarRequest $request, ArsipSuratKeluar $arsipSuratKeluar)
    {
        // Validate the incoming request
        $request->validate([
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|string|max:255',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'dikirim_kepada' => 'required|string|max:255',
            'lampiran' => 'required|string|max:255',
            'keterangan' => 'required|string|in:biasa,segera',
            'document' => 'nullable|file|mimes:pdf,doc,docx,txt|max:10240', // File size limit
        ]);

        // Update the file if it exists
        $documentPath = $arsipSuratKeluar->document_path;
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            // Delete old file if it exists
            if ($documentPath) {
                Storage::delete('public/' . $documentPath);
            }
            $documentPath = $request->file('document')->store('documents', 'public');
        }

        // Update the ArsipSuratMasuk record in the database
        $arsipSuratKeluar->update([
            'tanggal_surat' => $request->tanggal_surat,
            'nomor_surat' => $request->nomor_surat,
            'pengirim' => $request->pengirim,
            'perihal' => $request->perihal,
            'dikirim_kepada' => $request->dikirim_kepada,
            'lampiran' => $request->lampiran,
            'keterangan' => $request->keterangan,
            'document_path' => $documentPath, // Update the file path in the database
        ]);

        // Redirect to the index with a success message
        return redirect('/dashboard/arsip_surat_keluar')->with('success', 'Surat Keluar updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipSuratKeluar $arsipSuratKeluar)
    {
        // Check if the file exists before deleting
        if ($arsipSuratKeluar->document_path && Storage::exists($arsipSuratKeluar->document_path)) {
            Storage::delete($arsipSuratKeluar->document_path);
        }

        // Delete the record from the database
        $arsipSuratKeluar->delete();

        // Redirect to the index with a success message
        return redirect('/dashboard/arsip_surat_keluar')->with('success', 'Surat Keluar deleted successfully!');
    }
}
