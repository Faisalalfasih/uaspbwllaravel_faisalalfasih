@extends('layouts.app')
@section('content')
<div class="container">
    <h3>TAMBAH DATA PETUGAS</h3>
    <form action="{{ url('/petugas')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <label for="hp">No HP</label>
            <input type="text" name="hp" class="form-control" placeholder="No HP" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
        </div>
    </form>
</div>
@endsection