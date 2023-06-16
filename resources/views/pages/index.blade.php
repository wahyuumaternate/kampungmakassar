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

            <div class="col-lg-4">

                <div class="sidebar sticky-top">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->



                    <h3 class="sidebar-title">Sambutan Lurah</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                            <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                            <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                            <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                            <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                    </div><!-- End sidebar recent posts-->
                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

            {{-- <div class="col-lg-1"></div> --}}

            <div class="col-lg-8 entries">
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
