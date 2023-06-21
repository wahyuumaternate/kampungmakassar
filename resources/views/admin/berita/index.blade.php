@extends('admin.layouts.main')
@section('headerside')
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Semua Berita</h2>
                <a href="{{ route('berita.tambah') }}" class="btn btn-primary"><i class="fe fe-file-plus fe-16"></i> Tambah Berita</a>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Dibuat Pada</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($beritas as $berita)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('storage/' . $berita->gambar) }}" width="80" alt=""></td>
                                            <td>{{ $berita->judul }}</td>
                                            <td>{{ $berita->created_at->format('M d,Y') }}</td>
                                            <td>
                                                {{-- <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                {{ asset('storage/' . $posts->img) }}
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                </div> --}}
                                                <a href="" class="btn btn-primary"><i class="fe fe-edit"></i> Edit</a>
                                                <a href="" class="btn btn-danger"><i class="fe fe-trash-2"></i> Hapus</a>
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
