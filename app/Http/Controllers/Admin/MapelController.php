<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mapel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $mapels = Mapel::all();
        return view('admin.mapel.index3', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.mapel.create2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'kode_mapel' => 'required|unique:mapels,kode_mapel',
        'nama_mapel' => 'required',
        'nama_pengajar' => 'required',
        'kelas_yang_diajar' => 'required',
    ]);


        Mapel::create($request->all());
        return redirect()->route('admin.mapel.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
