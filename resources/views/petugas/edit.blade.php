@extends('layouts.app')
@section('content')
<div class="container">
    <h3>EDIT DATA PETUGAS</h3>
    <form action="{{ url('/golongan/' .$row->gol_id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $row->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="hp">No HP</label>
            <input type="text" name="hp" class="form-control" placeholder="No HP" value="{{ $row->hp }}" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
        </div>
    </form>
</div>
@endsection