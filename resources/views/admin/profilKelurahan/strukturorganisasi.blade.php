@extends('admin.layouts.main',['title' => 'Struktur Organisasi'])
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">Staff Kelurahan</h2>
                    </div>
                    {{-- modal --}}
                    <div class="col-auto">
                        {{-- <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">Open modal</button> --}}
                        <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="varyModalLabel">Tambah Staff</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('organisasi.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="recipient-name"
                                                    name="nama">
                                                    @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="example-fileinput">Foto:</label>
                                                <input type="file" id="example-fileinput" class="form-control-file @error('gambar') is-invalid @enderror"
                                                    name="gambar">
                                                @error('gambar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="custom-select">Jabatan:</label>
                                                <select class="custom-select" id="custom-select" name="jabatan">
                                                    <option selected>-- Pilih Jabatan --</option>
                                                    <option value="Lurah">Lurah</option>
                                                    <option value="Sekretaris">Sekretaris</option>
                                                    <option value="Staff">Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn mb-2 btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn mb-2 btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#varyModal"
                            data-whatever="@mdo"><span class="fe fe-filter fe-12 mr-2"></span>Tambah Anggota</button>
                    </div>
                </div>
                <!-- table -->
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($struktur_organisasi as $so)
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('storage/' . $so->gambar) }}" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $so->nama }}</strong></p>
                                        </td>
                                        <td class="text-muted"><strong>{{ $so->jabatan }}</strong></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('organisasi.edit', $so->slug) }}"
                                                    class="btn btn-primary dropdown-item"><i class="fe fe-edit"></i>
                                                    Edit</a>
                                                <form class="d-flex" method="POST"
                                                    action="{{ route('organisasi.delete', $so->slug) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger dropdown-item" onclick="return confirm('anda yakin ingin menghapus data ini secara permanen?');event.preventDefault();
                                                    "><i class="fe fe-trash-2"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
