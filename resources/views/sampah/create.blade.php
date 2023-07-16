@extends('layouts.app')
@section('content')
<div class="container">
    <h3>TAMBAH DATA SAMPAH</h3>
    <form action="{{ url('/sampah')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">PETUGAS</label>
            <select name="id_petugas" id="" class="form-control">
                @foreach ($dataPetugas as $row)
                <option value="{{$row->id}}">{{$row->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">PELANGGAN</label>
            <select name="id_pelanggan" id="" class="form-control">
                @foreach ($dataPelanggan as $row)
                <option value="{{$row->id}}">{{$row->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">JENIS SAMPAH</label>
            <input type="text" name="jenis_sampah" class="form-control" placeholder="Jenis Sampah" required>
        </div>
        <div class="mb-3">
            <label for="">BERAT SAMPAH</label>
            <input type="text" name="berat_sampah" class="form-control" placeholder="Berat Sampah" required>
        </div>
        <div class="mb-3">
            <label for="">KETERANGAN</label>
            <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
        </div>
    </form>
</div>
@endsection