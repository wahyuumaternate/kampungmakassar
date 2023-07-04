@extends('admin.layouts.main',['title' => 'Pengaduan Terkirirm'])
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Semua Pengaduan</h2>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                {{-- <div class="card-header mb-3">
                                    <a href="{{ route('pengaduan.index') }}" class="btn btn-primary"><i class="fe fe-send fe-16"></i> Pengaduan Belum Terkirim</a>
                                </div> --}}
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th><strong>#</strong></th>
                                            <th><strong>Nama</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Jenis Pengaduan</strong></th>
                                            <th><strong>Lampiran</strong></th>
                                            <th><strong>Aprove</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengaduan as $pengaduan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pengaduan->nama }} </td>
                                                <td>{{ $pengaduan->email }}</td>
                                                <td>{{ $pengaduan->jenis_pengaduan }}</td>
                                                <td><a download="lampiran_pengaduan_{{ $pengaduan->nama }}" class="btn btn-success" href="{{ url('storage/' . $pengaduan->lampiran) }}"><i class="fe fe-download"></i> Download</a></td>
                                                <td>@if ($pengaduan->aprove == 1)
                                                    <span class="dot dot-lg bg-success mr-2"></span>
                                                    @else
                                                        <span class="dot dot-lg bg-danger mr-2"></span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('pengaduan.edit', $pengaduan->slug) }}"
                                                            class="btn btn-primary dropdown-item"><i class="fe fe-send fe-16"></i>
                                                            Kirim</a>
                                                        <a href="{{ route('pengaduan.edit', $pengaduan->slug) }}"
                                                            class="btn btn-primary dropdown-item"><i class="fe fe-eye"></i>
                                                            Detail</a>
                                                        <form class="d-flex" method="POST"
                                                            action="{{ route('pengaduan.delete', $pengaduan->slug) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger dropdown-item" onclick="return confirm('anda yakin ingin menghapus berita ini secara permanen?');event.preventDefault();
                                                            "><i class="fe fe-trash-2"></i> Hapus</button>
                                                        </form>
                                                        {{-- <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="btn btn-danger d-flex dropdown-item"
                                                                    href="{{ route('berita.delete', $berita->slug) }}"
                                                                    onclick="return confirm('anda yakin ingin menghapus berita?');event.preventDefault();
                                                        "><i
                                                                        class="fe fe-trash-2"></i> Hapus</a>
                                                    <a class="dropdown-item" href="#">Remove</a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    
@endsection
