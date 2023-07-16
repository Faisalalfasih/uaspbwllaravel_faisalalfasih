@extends('layouts.app')
@section('content')
<div class="container">
    <h3>EDIT DATA PELANGGAN</h3>
    <form action="{{ url('/pelanggan/' .$row->id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $row->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" equired>{{ $row->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
        </div>
    </form>
</div>
@endsection