@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<!-- ======= Visi & Misi Section ======= -->
<section id="visi_misi" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Visi & Misi</h2>
        </div>
        @foreach ($visimisi as $vm)
            <p>{!! $vm->isi !!}</p>
        @endforeach
</section><!-- End Visi & Misi Section -->

@include('layouts.footer')
@endsection
