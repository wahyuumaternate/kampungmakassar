@extends('layouts.main')

@section('body')
@section('outmain')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}
@endsection

<!-- ======= posts Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Berita Terkini</h2>
        </div>
        <div class="row">


            <div class="col-lg-1"></div>
            <div class="col-lg-10 entries">
                <div class="row">
                    @foreach ($berita as $b)
                        <div class="col-lg-6 col-sm-12">
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('storage/' . $b->gambar) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="{{ route('detail.berita', $b->slug) }}">{{ $b->judul }}</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                                href="{{ route('detail.berita', $b->slug) }}">{{ $b->views }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="{{ route('detail.berita', $b->slug) }}"><time
                                                    datetime="2020-01-01">{{ $b->created_at->format('M d, Y') }}</time></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        {!! $b->excerp !!}
                                    </p>
                                    <div class="read-more">
                                        <a href="{{ route('detail.berita', $b->slug) }}">Read More</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
                    @endforeach
                </div>
            </div>
            @if ($berita->count() > 8)
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            @endif

        </div><!-- End blog entries list -->
        <div class="col-lg-1"></div>

    </div>

    </div>
</section><!-- End posts Section -->
@include('layouts.footer')
@endsection
