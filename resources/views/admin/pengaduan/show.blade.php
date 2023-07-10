@extends('admin.layouts.main', ['title' => 'Detail Pengaduan '])
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Detail Pengaduan</h2>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6>Nama : {{ $pengaduan->nama }}</h6>
                                        <h6>Email : {{ $pengaduan->email }}</h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6>Jenis Pengaduan : {{ $pengaduan->jenis_pengaduan }}</h6>
                                        <h6>Lampiran : <a download="lampiran_pengaduan_{{ $pengaduan->nama }}" class="btn btn-success"
                                                href="{{ url('storage/' . $pengaduan->lampiran) }}"><i
                                                    class="fe fe-download"></i> Download</a></h6>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h6>Deskripsi : </h6>
                                <p>{{ $pengaduan->deskripsi }}</p>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
