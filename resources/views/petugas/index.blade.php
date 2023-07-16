@extends('layouts.app')
@section('content')
<div class="container">

    <h2> DAFTAR PETUGAS
        <a class="btn btn-info btn-sm float-end" href="{{ url('petugas/create') }}">Tambah Data</a>
    </h2>
    <table class="table table-bordered table-hover">
        <tr class="table-dark">
            <td class="text-center">NO</td>
            <td class="text-center">NAMA</td>
            <td class="text-center">NO HP</td>
            <td class="text-center">EDIT</td>
            <td class="text-center">HAPUS</td>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td class="text-center">{{ $row->id}}</td>
            <td class="text-center">{{ $row->nama}}</td>
            <td class="text-center">{{ $row->hp}}</td>
            <td class="text-center"><a class="btn btn-info btn-sm float" href="{{url('petugas/' .$row->id. '/edit')}}">Edit</a></td>
            <td class="text-center">
                <form action="{{url('petugas/' .$row->id)}}" method="post">
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