@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<!-- ======= Sejarah Section ======= -->
<section id="sejarah" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Sejarah</h2>
        </div>
        @foreach ($sejarah as $sj)
            <p>{!! $sj->isi !!}</p>
        @endforeach
    </div>
   
</section><!-- End Sejarah Section -->

@include('layouts.footer')
@endsection
