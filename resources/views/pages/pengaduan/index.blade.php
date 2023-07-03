@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<section id="Pengaduan" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>PENGADUAN</h2>
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="Nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="NIK" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>-- Pilih Jenis Pengaduan --</option>
                        <option value="Penyalahgunaan Wewenang">Penyalahgunaan Wewenang</option>
                        <option value="Pelayanan Public/Masyarakat">Pelayanan Public/Masyarakat</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Pengaduan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label"></label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('layouts.footer')
@endsection
