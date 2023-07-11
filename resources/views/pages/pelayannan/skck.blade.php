@extends('layouts.main', ['title' => 'Pengaduan'])

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
                <li>Pelayanan SKCK</li>
            </ol>
        </div>

    </div>
</section><!-- End breadcrumbs Section -->

<section id="Pengaduan" class="blog">

    <div class="container" data-aos="fade-up">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <small>Jika Berkas Sudah Siap Kami Akan Menghubungi Anda Pada Email</small> <br>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <div class="card-title mb-3">
                    <h3>Mekanisme Dan Prosedur Sistem</h3>
                    <ul>
                        <li>Petugas menerima dan memeriksa kelengkapan berkas permohonan. Jika lengkap, diteruskan
                            untuk proses lebih lanjut. Jika tidak, dikembalikan ke pemohon untuk dilengkapi melalui email/wa.
                        </li>
                        <li> Kasi yang membidangi melakukan verifikasi data. Jika dinilai tidak cukup, dikembalikan ke
                            pemohon. Jika cukup, dilakukan pemrosesan Surat dan
                            diparaf serta diteruskan ke Lurah.
                        </li>
                        <li>Lurah menandatangani Surat dan menyerahkan kepada Kasi.
                        </li>
                        <li> Petugas membubuhkan cap stempel dan menyerahkan Surat kepada
                            Pemohon.</li>
                        <li>
                            Kasi merigestrasikan Surat dan menyerahkannya kepada petugas.
                        </li>
                    </ul>
                    <small class="text-muted">Maksimal Ukuran File 2mb. format dokument : pdf, docs</small>
                </div>
                <form action="{{ route('skck.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="fc_kk" class="form-label">Foto Copy Kartu Kelurahan (KK)</label>
                        <input id="fc_kk" class="form-control @error('fc_kk') is-invalid @enderror" type="file"
                            id="formFileMultiple" name="fc_kk">

                        @error('fc_kk')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fc_ktp" class="form-label">Foto Copy Kartu Tanda Penduduk (KTP)</label>
                        <input id="fc_ktp" class="form-control @error('fc_ktp') is-invalid @enderror" type="file"
                            id="formFileMultiple" name="fc_ktp">

                        @error('fc_ktp')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pengantar_rt_rw" class="form-label">Surat Pengantar dari Ketua RT/RW
                            setempat</label>
                        <input id="pengantar_rt_rw" class="form-control @error('pengantar_rt_rw') is-invalid @enderror"
                            type="file" id="formFileMultiple" name="pengantar_rt_rw">

                        @error('pengantar_rt_rw')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="capctha w-100">
                        </div>
                    </div>
                    <div class="col-auto ">
                        <button type="submit" class="btn index-bg mb-3">Kirim</button>

                    </div>
                </form>

            </div>
        </div>
</section>

@include('layouts.footer')
@endsection
