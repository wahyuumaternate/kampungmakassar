@extends('admin.layouts.main')
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Data Penduduk</h2>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="card-header">
                                    {{-- <a href="{{ route('datapenduduk.tambah') }}" class="btn btn-primary"><i
                                            class="fe fe-file-plus fe-16"></i> Tambah
                                        Data Penduduk</a> --}}
                                        <strong class="card-title">Tambah Data Penduduk</strong>
                                        <small class="d-block mt-2 card-title text-danger">* Wajib Di isi</small>
                                </div>
                                {{-- form --}}
                                <form action="{{ route('datapenduduk.store') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3 mt-3">

                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Rt <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV" disabled="disabled">Nevada (disabled)</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- Rt -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Rw <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV" disabled="disabled">Nevada (disabled)</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- Rw -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Dusun</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- dusun -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Alamat <span class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- alamat -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                                                <input type="number" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- no_kk -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama Kepala Keluarga <span class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- nama kepala keluarga -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama <span class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- nama -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nik <span class="text-danger">*</span></label>
                                                <input type="number" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- nik -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Jenis Kelamin <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV" disabled="disabled">Nevada (disabled)</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- jenis kelamin -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Hubungan Dengan Kepala Keluarga <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV" disabled="disabled">Nevada (disabled)</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- hubungan -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Tempat Lahir <span class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- tempat lahir -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Tanggal Lahir <span class="text-danger">*</span></label>
                                                <input type="date" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- tanggal lahir -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Usia <span class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- usia -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Status <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV" disabled="disabled">Nevada (disabled)</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- status -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Agama <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                
                                            </select>
                                        </div> <!-- agama -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Golongan Darah <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV" disabled="disabled">Nevada (disabled)</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- golongan darah -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Kewarganegaraan</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- kewarganegaraan -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Etnis/Suku</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                              </div>
                                        </div> <!-- etnis suku -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Pendidikan <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- fpendidikan -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Pekerjaan <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Pekerjaan">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- Pekerjaan -->
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"><i class="fe fe-save"></i> Tambah</button>
                                        </div>
                                    </div>

                                </form><!-- End General Form Elements -->
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
