<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\Pelanggan;
use App\Models\Sampah;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Sampah::all();
        return view('sampah.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataPetugas = Petugas::all();
        $dataPelanggan = Pelanggan::all();
        return view('sampah.create', compact('dataPetugas', 'dataPelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sampah::create(
            [
                'id_petugas' => $request->id_petugas,
                'id_pelanggan' => $request->id_pelanggan,
                'jenis_sampah' => $request->jenis_sampah,
                'berat_sampah' => $request->berat_sampah,
                'keterangan' => $request->keterangan
            ]
        );

        return redirect('sampah')->with('success', 'Data berhasil ditambahkan');
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
        $dataSampah = Sampah::findOrFail($id);
        $dataPetugas = Petugas::all();
        $dataPelanggan = Pelanggan::all();
        return view('sampah.edit', compact('dataSampah', 'dataPetugas', 'dataPelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Sampah::findOrFail($id);
        $row->update(
            [
                'id_petugas' => $request->id_petugas,
                'id_pelanggan' => $request->id_pelanggan,
                'jenis_sampah' => $request->jenis_sampah,
                'berat_sampah' => $request->berat_sampah,
                'keterangan' => $request->keterangan
            ]
        );
        return redirect('sampah')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Sampah::findOrFail($id);
        $row->delete();

        return redirect('sampah')->with('success', 'Data berhasil dihapus');
    }
}
