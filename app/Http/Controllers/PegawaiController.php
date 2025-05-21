<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::all(); // Or use pagination: Pegawai::paginate(10);
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:pegawais,nip',
            'golongan' => 'nullable|string|max:50',
            'tmt_golongan' => 'nullable|date',
            'jabatan' => 'nullable|string|max:100',
            'tmt_jabatan' => 'nullable|date',
            'tmt_cpns' => 'nullable|date',
            'tmt_pns_pppk' => 'nullable|date',
            'pendidikan' => 'nullable|string|max:100',
            'tahun_lulus' => 'nullable|integer|min:1900|max:2025',
            'tmt_mutasi' => 'nullable|date',
            'tgl_lahir' => 'nullable|date',
            'umur' => 'nullable|integer|min:0',
            'status_perkawinan' => 'nullable|in:Menikah,Belum Menikah',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Added for image
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Prepare data for creation
            $data = $request->only([
                'nama', 'nip', 'golongan', 'tmt_golongan', 'jabatan', 'tmt_jabatan',
                'tmt_cpns', 'tmt_pns_pppk', 'pendidikan', 'tahun_lulus', 'tmt_mutasi',
                'tgl_lahir', 'umur', 'status_perkawinan',
            ]);

            // Handle image upload
            if ($request->hasFile('photo')) {
                $path = $request->file('photo')->store('photos', 'public');
                $data['photo_url'] = $path;
            }

            // Create a new Pegawai record
            Pegawai::create($data);

            // Redirect with success message
            return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Redirect with error message
            return redirect()->back()->with('error', 'Gagal menambahkan pegawai: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:pegawais,nip,' . $pegawai->id,
            'golongan' => 'nullable|string|max:50',
            'tmt_golongan' => 'nullable|date',
            'jabatan' => 'nullable|string|max:100',
            'tmt_jabatan' => 'nullable|date',
            'tmt_cpns' => 'nullable|date',
            'tmt_pns_pppk' => 'nullable|date',
            'pendidikan' => 'nullable|string|max:100',
            'tahun_lulus' => 'nullable|integer|min:1900|max:2025',
            'tmt_mutasi' => 'nullable|date',
            'tgl_lahir' => 'nullable|date',
            'umur' => 'nullable|integer|min:0',
            'status_perkawinan' => 'nullable|in:Menikah,Belum Menikah',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Added for image
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Prepare data for update
            $data = $request->only([
                'nama', 'nip', 'golongan', 'tmt_golongan', 'jabatan', 'tmt_jabatan',
                'tmt_cpns', 'tmt_pns_pppk', 'pendidikan', 'tahun_lulus', 'tmt_mutasi',
                'tgl_lahir', 'umur', 'status_perkawinan',
            ]);

            // Handle image upload
            if ($request->hasFile('photo')) {
                // Delete old image if it exists
                if ($pegawai->photo_url) {
                    Storage::disk('public')->delete($pegawai->photo_url);
                }
                // Store new image
                $path = $request->file('photo')->store('photos', 'public');
                $data['photo_url'] = $path;
            }

            // Update the Pegawai record
            $pegawai->update($data);

            return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui pegawai: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        try {
            // Delete associated image if it exists
            if ($pegawai->photo_url) {
                Storage::disk('public')->delete($pegawai->photo_url);
            }

            // Delete the Pegawai record
            $pegawai->delete();

            return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus pegawai: ' . $e->getMessage());
        }
    }
}