@extends('layouts.app')
@section('content')
<div class="container">
    <h3>TAMBAH DATA PELANGGAN</h3>
    <form action="{{ url('/pelanggan')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" required></textarea>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
        </div>
    </form>
</div>
@endsection