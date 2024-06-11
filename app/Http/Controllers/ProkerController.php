<?php

namespace App\Http\Controllers;

use App\Models\proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prokeries = Proker::get();
        return view('proker.datapro', compact('prokeries'));
    }

    
    public function create()
    {
        return view('proker.create');
    }

    
    public function store(Request $request)
    {
       $request->validate([
        'nama' => 'required',
        'tanggal' => 'required',
        'id_bidang' => 'required',
        'tempat' => 'required',
        'pj' => 'required',
        'deskripsi' => 'required|string',
        'is_active' => 'sometimes'
       ]);

       Proker::create([
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'id_bidang' => $request->id_biang,
        'tempat' => $request->tempat,
        'pj' => $request->pj,
        'deskripsi' => $request->deskripsi,
        'is_active' => $request->is_active == true ? 1:0,
        
       ]);

       return redirect('proker/create')->with('status', 'Proker Created');
    }

    
    public function show(proker $proker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proker $proker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proker $proker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proker $proker)
    {
        //
    }
}
