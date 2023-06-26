@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    @include('layouts.hero')
@endsection

<!-- ======= Pelayanan Section ======= -->
<section class="services">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box icon-box-blue">
                    <lord-icon src="https://cdn.lordicon.com/zscdqzcc.json" trigger="hover" colors="primary:#107c91"
                        style="width:190px;height:190px">
                    </lord-icon>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                        sint occaecati cupiditate non provident</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box icon-box-blue">
                    <lord-icon src="https://cdn.lordicon.com/zchxlapl.json" trigger="hover" colors="primary:#107c91"
                        style="width:190px;height:190px">
                    </lord-icon>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                    <lord-icon src="https://cdn.lordicon.com/nxooksci.json" trigger="hover" colors="primary:#107c91"
                        style="width:190px;height:190px">
                    </lord-icon>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                    <lord-icon src="https://cdn.lordicon.com/uvqnvwbl.json" trigger="hover" colors="primary:#107c91"
                        style="width:190px;height:190px">
                    </lord-icon>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Pelayanan Section -->

<!-- ======= posts Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Berita Terkini</h2>
        </div>
        <div class="row">

            {{-- side berita --}}
            <div class="col-lg-4">

                <div class="sidebar sticky-top">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="/" method="get">
                            <input type="text" name="cari-berita" value="{{ request('cari-berita') }}">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->


                    {{-- sambutan Lurah --}}
                    <h3 class="sidebar-title">Sambutan Lurah</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($sambutan_lurah as $sambutan)
                            <div class="post-item clearfix">
                                <img src="{{ asset('storage/' . $sambutan->gambar_lurah) }}" alt="gambar lurah">
                                <h4><a
                                        href="{{ route('sambutanlurah', $sambutan->slug) }}">{{ $sambutan->nama_lurah }}</a>
                                </h4>
                                <time datetime="2020-01-01">{{ $sambutan->updated_at->format('M d, Y') }}</time>
                            </div>
                        @endforeach
                    </div><!-- End sidebar recent posts-->
                    {{-- end sambutan Lurah --}}
                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($recent_post as $b)
                            <div class="post-item clearfix">
                                <img src="{{ asset('storage/' . $b->gambar) }}" alt="{{ $b->judul }}">
                                <h4><a href="{{ route('detail.berita', $b->slug) }}">{{ $b->judul }}</a></h4>
                                <time datetime="2020-01-01">{{ $b->created_at->format('M d, Y') }}</time>
                            </div>
                        @endforeach

                    </div><!-- End sidebar recent posts-->
                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->


            {{-- berita --}}
            <div class="col-lg-8 entries">
                <div class="row">
                    @if ($berita->count())
                        @foreach ($berita as $berita)
                            <div class="col-lg-6 col-sm-12">
                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt=""
                                            class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="{{ route('detail.berita', $berita->slug) }}">{{ $berita->judul }}</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                                    href="{{ route('detail.berita', $berita->slug) }}">{{ $berita->views }}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="{{ route('detail.berita', $berita->slug) }}"><time
                                                        datetime="2020-01-01">{{ $berita->created_at->format('M d, Y') }}</time></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="entry-content">
                                        <p>
                                            {!! $berita->excerp !!}
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ route('detail.berita', $berita->slug) }}">Selengkapnya</a>
                                        </div>
                                    </div>

                                </article><!-- End blog entry -->
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-center mt-5"> Berita Yang Anda Cari Tidak Ada !!!</h5>
                    @endif

                </div>
                @if ($berita->count() >= 6)
                    <div class="blog-pagination">
                        <h5 class="text-center"> <a href="" class="text-center btn text-white"
                                style="background-color: #4fa6d5">Lihat Berita Lainnya</a></h5>

                    </div>
                @endif

            </div><!-- End blog entries list -->

        </div>

    </div>
</section><!-- End posts Section -->

<!-- ======= Facts Section ======= -->
<section class="facts section-bg mt-3" data-aos="fade-up">
    <div class="container">

        <div class="row counters">

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Jumlah Penduduk</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Jumlah Penduduk Perempuan</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Jumlah Penduduk Laki - Laki</p>
            </div>
        </div>

    </div>
</section><!-- End Facts Section -->

{{-- JS --}}
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
@include('layouts.footer')
@endsection
