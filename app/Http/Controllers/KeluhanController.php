<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::latest()->get();
        return view('dashboard.keluhan.index', compact('keluhans'));
    }

    public function create()
    {
        return view('dashboard.keluhan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'asal_keluhan' => 'required|in:whatsapp,instagram,email,google_review',
            'nama_pengirim' => 'required|string|max:255',
            'email_pengirim' => 'nullable|email|max:255',
            'perihal' => 'required|string|max:255',
            'isi_pesan' => 'required|string'
        ]);

        Keluhan::create($validated);

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil ditambahkan!');
    }

    public function show(Keluhan $keluhan)
    {
        return view('dashboard.keluhan.show', compact('keluhan'));
    }

    public function edit(Keluhan $keluhan)
    {
        return view('dashboard.keluhan.edit', compact('keluhan'));
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $validated = $request->validate([
            'asal_keluhan' => 'required|in:whatsapp,instagram,email,google_review',
            'nama_pengirim' => 'required|string|max:255',
            'email_pengirim' => 'nullable|email|max:255',
            'perihal' => 'required|string|max:255',
            'isi_pesan' => 'required|string'
        ]);

        $keluhan->update($validated);

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil diperbarui!');
    }

    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil dihapus!');
    }
} 