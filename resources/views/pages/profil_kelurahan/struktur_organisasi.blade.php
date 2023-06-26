@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<!-- ======= Struktur Organisasi Section ======= -->
<section id="struktur_organisasi" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Struktur Organisasi</h2>
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            @foreach ($lurah as $l)
                            <div class="col-lg-6">
                                <img src="{{ asset('storage/'.$l->gambar) }}" alt=""
                                    class="img-fluid rounded-circle w-50 mb-4">
                                <h4>{{ $l->nama }}</h4>
                                <span class="d-block mb-3 text-uppercase">{{ $l->jabatan }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach ($sekretaris as $s)
                    <div class="col-lg-4 text-center mb-5">
                        <img src="{{ asset('storage/'.$s->gambar) }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>{{ $s->nama }}</h4>
                        <span class="d-block mb-3 text-uppercase">{{ $s->jabatan }}</span>
                    </div>
                    @endforeach
                    @foreach ($aggota as $a)
                    <div class="col-lg-4 text-center mb-5">
                        <img src="{{ asset('storage/'.$a->gambar) }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>{{ $a->nama }}</h4>
                        <span class="d-block mb-3 text-uppercase">{{ $a->jabatan }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section><!-- End Struktur Organisasi Section -->

@include('layouts.footer')
@endsection
