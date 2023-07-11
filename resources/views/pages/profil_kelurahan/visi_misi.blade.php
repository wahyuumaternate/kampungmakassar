@extends('layouts.main',['title' => 'Visi & Misi Kelurahan'])

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
                <li><a href="">Profil Kelurahan</a></li>
                <li>Visi & Misi</li>
            </ol>
        </div>

    </div>
</section><!-- End breadcrumbs Section -->

<!-- ======= Visi & Misi Section ======= -->
<section id="visi_misi" class="blog">
    <div class="container" data-aos="fade-up">
        
        @foreach ($visimisi as $vm)
            <p>{!! $vm->isi !!}</p>
        @endforeach
</section><!-- End Visi & Misi Section -->

@include('layouts.footer')
@endsection
