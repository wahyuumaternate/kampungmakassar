@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<!-- ======= Gambaran UMUM Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Gambaran Umum</h2>
        </div>
        @foreach ($gambaranumum as $gu)
            <p>{!! $gu->isi !!}</p>
        @endforeach
    </div>
</section><!-- End Gambaran UMUM Section -->

@include('layouts.footer')
@endsection
