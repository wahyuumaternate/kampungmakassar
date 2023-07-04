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
                <li>Pengaduan</li>
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
                <small>Pengaduan Akan Di Validasi Dan Di Kirim Ke Email Anda</small> <br>
                <small>Mungkin Membutuhkan Waktu Yang Lama Atau Anda Dapat Langsung Pergi Ke Kantor</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            id="exampleFormControlInput1" placeholder="Nama Lengkap" name="nama"
                            value="{{ old('nama') }}" autofocus>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="number" class="form-control @error('nik') is-invalid @enderror"
                            id="exampleFormControlInput1" placeholder="NIK" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="exampleFormControlInput1" placeholder="Email" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select class="form-select @error('jenis_pengaduan') is-invalid @enderror"
                            aria-label="Default select example" name="jenis_pengaduan">
                            <option selected value="">-- Pilih Jenis Pengaduan --</option>
                            <option @if (old('jenis_pengaduan') == 'Penyalahgunaan Wewenang') selected @endif value="Penyalahgunaan Wewenang">
                                Penyalahgunaan Wewenang</option>
                            <option @if (old('jenis_pengaduan') == 'Pelayanan Public/Masyarakat') selected @endif
                                value="Pelayanan Public/Masyarakat">Pelayanan Public/Masyarakat</option>
                        </select>
                        @error('jenis_pengaduan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pengaduan</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"
                            name="deskripsi"></textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Lampiran</label>
                        <input class="form-control @error('lampiran') is-invalid @enderror" type="file"
                            id="formFileMultiple" name="lampiran">
                        @error('lampiran')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="formFileMultiple" class="form-label">Masukan Kode Captcha</label>
                            <input class="form-control @error('captcha') is-invalid @enderror" type="text"
                                id="formFileMultiple" name="captcha">
                            @error('captcha')
                                <span class="invalid-feedback" role="alert">
                                    <small class="text-danger">{{ $message }}</small>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <label for="formFileMultiple" class="form-label">Kode Captcha</label>
                            <div class="capctha w-100">
                                {{-- <span>{!! captcha_img('math') !!}</span> --}}
                                <a href="" class="btn index-bg text-light reload" id="reload">&#x21bb</a>

                            </div>
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

