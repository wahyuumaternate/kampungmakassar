@extends('admin.layouts.main')
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <h2 class="mb-2 page-title"><i class="fe fe-file-plus"></i> Tambah Berita</h2>
    <div class="card shadow mb-4">
        
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <button class="btn btn-primary"><i class="fe fe-save"></i> Simpan</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="simpleinput">Judul</label>
                            <input type="text" id="simpleinput" class="form-control  @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}">
                            @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="example-fileinput">Max size 2mb. format : png, jpg, jpeg</label>
                            <input type="file" id="example-fileinput" class="form-control-file  @error('gambar') is-invalid @enderror" name="gambar">
                            @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Isi</h5>
                            <label for="inputtext" class="form-label">Body</label>
                                <input id="isi" class="form-control @error('isi') is-invalid @enderror" type="hidden"
                                    name="isi" value="{{ old('isi') }}">
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                                <trix-editor input="isi"></trix-editor>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div> <!-- / .card -->

@endsection
