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
                    <div class="col-lg-6 col-sm-12">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui
                                    quibusdam quia</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                            href="blog-single.html">200</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                            href="blog-single.html">200</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>
                    <div class="col-lg-6 col-sm-12">

                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta
                                    libero
                                    sit sint.</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                            href="blog-single.html">200</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti
                                    explicabo
                                    eius exercitationem.</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                            href="blog-single.html">200</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>
                </div>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>

            </div><!-- End blog entries list -->
            <div class="col-lg-1"></div>

        </div>

    </div>
</section><!-- End posts Section -->
            @include('layouts.footer')
        @endsection
