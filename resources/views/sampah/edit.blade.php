@extends('layouts.app')
@section('content')
<div class="container">
    <h3>EDIT DATA SAMPAH</h3>
    <form action="{{ url('/sampah/' .$dataSampah->id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="">PETUGAS</label>
            <select name="id_petugas" id="" class="form-control">
                @foreach ($dataPetugas as $row)
                <option value="{{$row->id}}" @if ($dataSampah->id_petugas == $row->id) ? 'selected' : '' @endif>{{$row->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">PELANGGAN</label>
            <select name="id_pelanggan" id="" class="form-control">
                @foreach ($dataPelanggan as $row)
                <option value="{{$row->id}}" @if ($dataSampah->id_pelanggan == $row->id) ? 'selected' : '' @endif>{{$row->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">JENIS SAMPAH</label>
            <input type="text" name="jenis_sampah" class="form-control" placeholder="Jenis Sampah" value="{{$dataSampah->jenis_sampah}}" required>
        </div>
        <div class="mb-3">
            <label for="">BERAT SAMPAH</label>
            <input type="text" name="berat_sampah" class="form-control" placeholder="Berat Sampah" value="{{$dataSampah->berat_sampah}}" required>
        </div>
        <div class="mb-3">
            <label for="">KETERANGAN</label>
            <textarea name="keterangan" class="form-control" placeholder="Keterangan">{{$dataSampah->keterangan}}</textarea>
        </div>

        <div class="mb-3">
            <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
        </div>
    </form>
</div>
@endsection