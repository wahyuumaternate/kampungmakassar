@extends('admin.layouts.main')
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Tambah Data Penduduk</h2>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="card-header">
                                    <a href="{{ route('datapenduduk.index') }}" class="btn btn-secondary"><i class="fe fe-arrow-left"></i> Kembali</a>
                                    <small class="d-block mt-2 card-title text-danger">* Wajib Di isi</small>
                                </div>
                                {{-- form --}}
                                <form action="{{ route('datapenduduk.store') }}" method="POST">
                                    @csrf
                                  
                                    <div class="row mb-3 mt-3">

                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Rt <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2" name="id_rt"
                                                autofocus required>
                                                <optgroup label="-- Pilih Rt --">
                                                    @foreach ($rt as $rt)
                                                        <option value="{{ $rt->id }}">Rt {{ $rt->nama_rt }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div> <!-- Rt -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Rw <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2" name="id_rw"
                                                required>
                                                <optgroup label="-- Pilih Rw --">
                                                    @foreach ($rw as $rw)
                                                        <option value="{{ $rw->id }}">Rw {{ $rw->nama_rw }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div> <!-- Rw -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Dusun</label>
                                                <input type="text" id="simpleinput" class="form-control  @error('dusun') is-invalid @enderror"
                                                    value="{{ old('Kampung Makassar Barat',"Kampung Makassar Barat") }}" placeholder="Dusun" required>
                                                @error('dusun')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- dusun -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Alamat <span class="text-danger">*</span></label>
                                                <input name="alamat" type="text" id="simpleinput" class="form-control @error('alamat') is-invalid @enderror"
                                                    value="{{ old('alamat') }}" placeholder="Alamat" required>
                                                    @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- alamat -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nomor Kartu Keluarga <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="simpleinput" class="form-control @error('no_kk') is-invalid @enderror"
                                                    value="{{ old('no_kk') }}" placeholder="Nomor Kartu Keluarga"
                                                    name="no_kk" required>
                                                    @error('no_kk')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- no_kk -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama Kepala Keluarga <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror"
                                                    value="{{ old('nama_kepala_keluarga') }}"
                                                    placeholder="Nama Kepala Keluarga" name="nama_kepala_keluarga" required>
                                                    @error('nama_kepala_keluarga')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- nama kepala keluarga -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama Penduduk <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="simpleinput" class="form-control @error('nama') is-invalid @enderror"
                                                    value="{{ old('nama') }}" name="nama" placeholder="Nama" required>
                                                    @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- nama -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nomor Induk Kependudukan <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="simpleinput" class="form-control @error('nik') is-invalid @enderror"
                                                    value="{{ old('nik') }}" name="nik" placeholder="Nik" required>
                                                    @error('nik')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- nik -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Jenis Kelamin <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2"name="jenis_kelamin"
                                                required>
                                                <optgroup label="-- Jenis Kelamin --">
                                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- jenis kelamin -->
                                        <div class="form-group col-md-6">
                                            <label for="hubungan">Hubungan Dengan Kepala Keluarga <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" id="hubungan" name="hubungan" required>
                                                <optgroup label="-- Hubungan --">
                                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Anak Kandung">Anak Kandung</option>
                                                    <option value="Mertua">Mertua</option>
                                                    <option value="Ibu">Ibu</option>
                                                    <option value="Ayah">Ayah</option>
                                                    <option value="Cucu">Cucu</option>
                                                    <option value="Adik">Adik</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- hubungan -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tempat_lahir">Tempat Lahir <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                    value="{{ old('tempat_lahir') }}" name="tempat_lahir"
                                                    placeholder="Tempat Lahir" required>
                                                    @error('tempat_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- tempat lahir -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tanggal_lahir">Tanggal Lahir <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    value="{{ old('tanggal_lahir') }}" name="tanggal_lahir"
                                                    placeholder="Tanggal Lahir" required>
                                                    @error('tanggal_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- tanggal lahir -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="usia">Usia <span class="text-danger">*</span></label>
                                                <input type="text" id="usia" class="form-control @error('usia') is-invalid @enderror"
                                                    value="{{ old('usia') }}" name="usia" placeholder="Usia"
                                                    required>
                                                    @error('usia')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- usia -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Status <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2" name="status"
                                                required>
                                                <optgroup label="-- Status --">
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                    <option value="Janda/Duda">Janda/Duda</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- status -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Agama <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2"
                                                value="{{ old('agama') }}" name="agama" required>
                                                <optgroup label="-- Agama --">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                    <option value="Agama lainnya">Agama lainnya</option>
                                                </optgroup>

                                            </select>
                                        </div> <!-- agama -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Golongan Darah <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2"
                                                name="golongan_darah" required>
                                                <optgroup label="-- Golongan Darah --">
                                                    <option  value="A">A</option>
                                                    <option value="AB">AB</option>
                                                    <option value="B">B</option>
                                                    <option value="O">O</option>
                                                    <option value="Tidak Tahu">Tidak Tahu</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- golongan darah -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <input type="text" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                    value="{{ old('kewarganegaraan') }}" name="kewarganegaraan"
                                                    placeholder="Kewarganegaraan" required>
                                                    @error('kewarganegaraan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- kewarganegaraan -->
                                        <div class="form-group col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="suku">Etnis/Suku</label>
                                                <input type="text" id="suku" class="form-control @error('suku') is-invalid @enderror"
                                                    value="{{ old('suku') }}" name="suku" placeholder="Etnis/Suku"
                                                    required>
                                                    @error('suku')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> <!-- etnis suku -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Pendidikan <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2"
                                                name="id_pendidikan">
                                                <optgroup label="-- Pendidikan --">
                                                    @foreach ($pendidikan as $pendidikan)
                                                        <option value="{{ $pendidikan->id }}">
                                                            {{ $pendidikan->nama_pendidikan }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div> <!-- fpendidikan -->
                                        <div class="form-group col-md-6">
                                            <label for="simple-select2">Pekerjaan <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" id="simple-select2" name="id_pekerjaan">
                                                <optgroup label="-- Pekerjaan --">
                                                    @foreach ($pekerjaan as $pekerjaan)
                                                        <option value="{{ $pekerjaan->id }}">
                                                            {{ $pekerjaan->nama_pekerjaan }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div> <!-- Pekerjaan -->
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"><i class="fe fe-save"></i>
                                                Tambah</button>
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
