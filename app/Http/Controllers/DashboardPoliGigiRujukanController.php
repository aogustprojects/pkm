<?php

namespace App\Http\Controllers;

use App\Models\PoliGigiRujukan;
use Illuminate\Http\Request;

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
