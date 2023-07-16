<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Petugas::all();
        return view('petugas.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Petugas::create(
            [
                'nama' => $request->nama,
                'hp' => $request->hp
            ]
        );

        return redirect('petugas')->with('success', 'Data berhasil ditambahkan');
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
        $row = Petugas::findOrFail($id);
        return view('petugas.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Petugas::findOrFail($id);
        $row->update(
            [
                'user_nama' => $request->user_nama,
                'user_hp' => $request->user_hp
            ]
        );
        return redirect('petugas')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Petugas::findOrFail($id);
        $row->delete();

        return redirect('petugas')->with('success', 'Data berhasil dihapus');
    }
}
