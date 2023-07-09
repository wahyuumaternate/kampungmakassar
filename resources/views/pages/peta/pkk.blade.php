@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection
<!-- ======= breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <ol>
                <li><a href="/">Beranda</a></li>
                <li><a href="/">Struktur Organisasi</a></li>
                <li>LPM</li>
            </ol>
        </div>

    </div>
</section><!-- End breadcrumbs Section -->

<!-- ======= LPM Section ======= -->
<section id="struktur_organisasi" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>LPM</h2>
            <div class="mb-5 mt-5" id="map" style=" height :650px; padding-top:300px;"></div>
        </div>
</section><!-- End LPM Section -->

@include('layouts.footer')
@endsection

@section('myjs')
    var map = L.map('map').setView([0.32745145091463096, 127.39895123739718], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    @foreach ($data as $i)
        L.marker([{{ $i->lat }}, {{ $i->long }}]).addTo(map)
            .bindPopup(" <img class='mt-1' width='200px' height='130px' src='{{ asset('storage/' . $i->gambar1) }}' alt=''> <br> <h4>Nama Desa : {{ $i->nama_desa }}</h4><h6>Kecamatan : {{ $i->kecamatan->nama_kecamatan }} </h6> <a class='btn btn-info text-white' href='{{ route('detailDesa',$i->id) }}'>Detail</a>")
    @endforeach
@endsection
