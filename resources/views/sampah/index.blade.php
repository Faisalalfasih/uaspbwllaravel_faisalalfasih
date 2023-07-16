@extends('layouts.app')
@section('content')
<div class="container">

    <h2>DATA SAMPAH PELANGGAN
        <a class="btn btn-info btn-sm float-end" href="{{ url('sampah/create') }}">Tambah Data</a>
    </h2>
    <table class="table table-bordered">
        <tr class="table-dark">
            <td class="text-center">NO</td>
            <td class="text-center">PETUGAS</td>
            <td class="text-center">PELANGGAN</td>
            <td class="text-center">ALAMAT</td>
            <td class="text-center">JENIS SAMPAH</td>
            <td class="text-center">BERAT SAMPAH</td>
            <td class="text-center">KETERANGAN</td>
            <td class="text-center">EDIT</td>
            <td class="text-center">HAPUS</td>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td class="text-center">{{ $row->id}}</td>
            <td class="text-center">{{ $row->petugas->nama}}</td>
            <td class="text-center">{{ $row->pelanggan->nama}}</td>
            <td class="text-center">{{ $row->pelanggan->alamat}}</td>
            <td class="text-center">{{ $row->jenis_sampah}}</td>
            <td class="text-center">{{ $row->berat_sampah}}</td>
            <td class="text-center">{{ $row->keterangan}}</td>
            <td class="text-center"><a class="btn btn-info btn-sm float" href="{{url('sampah/' .$row->id. '/edit')}}">Edit</a></td>
            <td class="text-center">
                <form action="{{url('sampah/' .$row->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection