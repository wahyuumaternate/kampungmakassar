<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center " style="z-index: 9999;">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="dropdown">
                    <a href="{{ url('visi-misi') }}">
                        <span>Profil</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('visi-misi') }}">Visi & Misi</a></li>
                        <li><a href="{{ url('sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ url('gambaran-umum') }}">Gambaran Umum</a></li>
                        <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('pkk') }}"><span>Kelembagaan</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('pkk') }}">PKK</a></li>
                        <li><a href="{{ url('lpm') }}">LPM</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('berita') }}">Berita</a></li>
                <li class="dropdown"><a href="{{ url('jenis-kelamin') }}"><span>Statistik Kelurahan</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('jenis-kelamin') }}">Jenis Kelamin</a></li>
                        <li><a href="{{ url('agama') }}">Agama</a></li>
                        <li><a href="{{ url('pekerjaan') }}">Pekerjaan</a></li>
                        <li><a href="{{ url('pendidikan') }}">Pendidkan</a></li>
                        <li><a href="{{ url('kelompok-umur') }}">Kelompok Umur</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('surat-keterangan-kelahiran') }}"><span>Pelayanan</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('surat-keterangan-kelahiran') }}">Surat Keterangan Kelahiran</a></li>
                        <li><a href="{{ url('surat-keterangan-kematian') }}">Surat Keterangan Kematian</a></li>
                        <li><a href="{{ url('surat-pengantar-pembuatan-ktp') }}">Surat Pengantar Pembuatan KTP</a></li>
                        <li><a href="{{ url('surat-pengantar-pembuatan-kk') }}">Surat Pengantar Pembuatan KK</a></li>
                        <li><a href="{{ url('surat-rekomendasi-izin-kegiatan-keramaian') }}">Surat Rekomendasi Izin
                                Kegiatan / Keramaian</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('pengaduan') }}">Pengaduan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
