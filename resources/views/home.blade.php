@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header bg-dark text-white">{{ __('Dashboard') }}</div>
                <img src="https://img.freepik.com/free-vector/people-recycling-concept_52683-37727.jpg?w=740&t=st=1689479165~exp=1689479765~hmac=d4f0b6e922831431a336c06606d73be5cab6bba8a9d94ea5709e1208c1474d36" class="header-image" width="856" height="580" alt="MAN BATUBARA">
                <div class="card-body bg-dark text-white border-0">
                    <div class="card-body bg-dark text-white border-0">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif


                        <h5 class="card-title text-center">Selamat Datang di Website PEDULI SAMPAH</h5>
                        <a href="{{ url('/pelanggan') }}" class="btn btn-primary my-3 w-100">{{ __('Anda Berhasil Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection