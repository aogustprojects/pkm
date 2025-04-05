<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArsipSuratMasuk;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArsipSuratMasukRequest;
use App\Http\Requests\UpdateArsipSuratMasukRequest;

class ArsipSuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        

        $arsipSuratMasuk = ArsipSuratMasuk::when($search, function ($query) use ($search) {
            $query->where('nomor_surat', 'like', "%$search%")
                ->orWhere('pengirim', 'like', "%$search%")
                ->orWhere('perihal', 'like', "%$search%")
                ->orWhere('diteruskan_kepada', 'like', "%$search%");
        })->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.arsip_surat_masuk.index', compact('arsipSuratMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.arsip_surat_masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArsipSuratMasukRequest $request)
    {
    // Validate the incoming request
    $request->validate([
        'tanggal_terima' => 'required|date',
        'tanggal_surat' => 'required|date',
        'nomor_surat' => 'required|string|max:255',
        'pengirim' => 'required|string|max:255',
        'perihal' => 'required|string|max:255',
        'diteruskan_kepada' => 'required|string|max:255',
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
    ArsipSuratMasuk::create([
        'tanggal_terima' => $request->tanggal_terima,
        'tanggal_surat' => $request->tanggal_surat,
        'nomor_surat' => $request->nomor_surat,
        'pengirim' => $request->pengirim,
        'perihal' => $request->perihal,
        'diteruskan_kepada' => $request->diteruskan_kepada,
        'lampiran' => $request->lampiran,
        'keterangan' => $request->keterangan,
        'document_path' => $documentPath, // Store the file path in the database
    ]);

    // Redirect to the index with a success message
    return redirect('/dashboard/arsip_surat_masuk')->with('success', 'Surat Masuk added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(ArsipSuratMasuk $arsipSuratMasuk)
    {
        $documentPath = storage_path('app/public/' . $arsipSuratMasuk->document_path);
    
        // Check if the file exists
        if (!file_exists($documentPath)) {
            abort(404, 'Document not found');
        }
        
        // Check the file type and handle accordingly
        $fileExtension = pathinfo($documentPath, PATHINFO_EXTENSION);
    
        return view('dashboard.arsip_surat_masuk.show', compact('arsipSuratMasuk', 'documentPath', 'fileExtension'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipSuratMasuk $arsipSuratMasuk)
    {
        return view('dashboard.arsip_surat_masuk.edit', compact('arsipSuratMasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArsipSuratMasukRequest $request, ArsipSuratMasuk $arsipSuratMasuk)
    {
         // Validate the incoming request
         $request->validate([
            'tanggal_terima' => 'required|date',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|string|max:255',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'diteruskan_kepada' => 'required|string|max:255',
            'lampiran' => 'required|string|max:255',
            'keterangan' => 'required|string|in:biasa,segera',
            'document' => 'nullable|file|mimes:pdf,doc,docx,txt|max:10240', // File size limit
        ]);

        // Update the file if it exists
        $documentPath = $arsipSuratMasuk->document_path;
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            // Delete old file if it exists
            if ($documentPath) {
                Storage::delete('public/' . $documentPath);
            }
            $documentPath = $request->file('document')->store('documents', 'public');
        }

        // Update the ArsipSuratMasuk record in the database
        $arsipSuratMasuk->update([
            'tanggal_terima' => $request->tanggal_terima,
            'tanggal_surat' => $request->tanggal_surat,
            'nomor_surat' => $request->nomor_surat,
            'pengirim' => $request->pengirim,
            'perihal' => $request->perihal,
            'diteruskan_kepada' => $request->diteruskan_kepada,
            'lampiran' => $request->lampiran,
            'keterangan' => $request->keterangan,
            'document_path' => $documentPath, // Update the file path in the database
        ]);

        // Redirect to the index with a success message
        return redirect('/dashboard/arsip_surat_masuk')->with('success', 'Surat Masuk updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipSuratMasuk $arsipSuratMasuk)
    {
        // Check if the file exists before deleting
        if ($arsipSuratMasuk->document_path && Storage::exists($arsipSuratMasuk->document_path)) {
            Storage::delete($arsipSuratMasuk->document_path);
        }

        // Delete the record from the database
        $arsipSuratMasuk->delete();

        // Redirect to the index with a success message
        return redirect('/dashboard/arsip_surat_masuk')->with('success', 'Surat Masuk deleted successfully!');
    }
}
