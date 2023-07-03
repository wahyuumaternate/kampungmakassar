<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GambaranUmumController;
use App\Http\Controllers\PekerjaanPendidikanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SambutanLurahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\StrukturOrganisasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Beranda Routes
Route::get('/', [BerandaController::class,'index'])->name('home');

// dashboard
Route::prefix('administrator/dashboard')->middleware('auth')->group(function () {
    
    Route::get('/',[DashboardController::class,'index'])->middleware(['verified'])->name('dashboard');
    // kependudukan
    Route::get('/data-penduduk', [DatapendudukController::class,'index'])->name('datapenduduk.index');
    Route::get('/data-penduduk/tambah', [DatapendudukController::class,'create'])->name('datapenduduk.tambah');
    Route::post('/data-penduduk/tambah/store', [DatapendudukController::class,'store'])->name('datapenduduk.store');
    Route::get('/data-penduduk/{datapenduduk:nik}/edit', [DatapendudukController::class,'edit'])->name('datapenduduk.edit');
    Route::put('/data-penduduk/{datapenduduk:id}/edit', [DatapendudukController::class,'update'])->name('datapenduduk.update');
    Route::delete('/data-penduduk/{datapenduduk}', [DatapendudukController::class,'destroy'])->name('datapenduduk.delete');
    // pekerjaan & pendidikan
    Route::get('kependudukan/pekerjaan', [PekerjaanPendidikanController::class,'pekerjaan'])->name('pekerjaan.index');
    Route::get('kependudukan/pendidikan', [PekerjaanPendidikanController::class,'pendidikan'])->name('pendidikan.index');
    // pekerjaan
    Route::post('/pekerjaan-pekerjaan', [PekerjaanPendidikanController::class,'strorePekerjaan'])->name('pekerjaan.store');
    Route::delete('/pekerjaan-pekerjaan/{pekerjaan}', [PekerjaanPendidikanController::class,'destroyPekerjaan'])->name('pekerjaan.delete');
    // pendidikan
    Route::post('/pendidikan-pendidikan', [PekerjaanPendidikanController::class,'strorePendidikan'])->name('pendidikan.store');
    Route::delete('/pendidikan-pendidikan/{pendidikan}', [PekerjaanPendidikanController::class,'destroyPendidikan'])->name('pendidikan.delete');
    //berita
    Route::get('/berita/semua-berita', [BeritaController::class,'index'])->name('berita.index');
    Route::get('/berita/tambah-berita', [BeritaController::class,'create'])->name('berita.tambah');
    Route::post('/berita/tambah-berita/store', [BeritaController::class,'store'])->name('berita.store');
    Route::get('/berita/{berita:slug}/edit-berita', [BeritaController::class,'edit'])->name('berita.edit');
    Route::put('/berita/{berita:slug}/edit-berita', [BeritaController::class,'update'])->name('berita.update');
    Route::delete('/berita/{berita:slug}', [BeritaController::class,'destroy'])->name('berita.delete');
    //struktur organisani
    Route::get('/profil-kelurahan/struktur-organisasi', [StrukturOrganisasiController::class,'index'])->name('organisasi.index');
    Route::post('/profil-kelurahan/tambah-struktur-organisasi/store', [StrukturOrganisasiController::class,'store'])->name('organisasi.store');
    Route::get('/profil-kelurahan/{struktur_organisasi:slug}/edit-struktur-organisasi', [StrukturOrganisasiController::class,'edit'])->name('organisasi.edit');
    Route::put('/profil-kelurahan/{struktur_organisasi:slug}/edit-struktur-organisasi', [StrukturOrganisasiController::class,'update'])->name('organisasi.update');
    Route::delete('/profil-kelurahan/{struktur_organisasi:slug}', [StrukturOrganisasiController::class,'destroy'])->name('organisasi.delete');
    // sambutan Lurah
    Route::get('/sambutan-lurah', [SambutanLurahController::class,'edit'])->name('lurah.index'); 
    Route::post('/sambutan-lurah', [SambutanLurahController::class,'store'])->name('lurah.store'); 
    Route::put('/sambutan-lurah/{sambutan}/update', [SambutanLurahController::class,'update'])->name('lurah.update');
    // visimisi
    Route::get('/profil-kelurahan/visi-misi', [VisiMisiController::class,'edit'])->name('visimisi.index');
    Route::put('/profil-kelurahan/visi-misi/{visiMisi}/update', [VisiMisiController::class,'update'])->name('visimisi.update');
    Route::post('/profil-kelurahan/visi-misi/', [VisiMisiController::class,'store'])->name('visimisi.store');
    // sejarah
    Route::get('/profil-kelurahan/sejarah', [SejarahController::class,'edit'])->name('sejarah.index');
    Route::put('/profil-kelurahan/sejarah/{sejarah}/update', [SejarahController::class,'update'])->name('sejarah.update');
    Route::post('/profil-kelurahan/sejarah/', [SejarahController::class,'store'])->name('sejarah.store');
    // gambaran umum
    Route::get('/profil-kelurahan/gambaranumum', [GambaranUmumController::class,'edit'])->name('gambaranumum.index');
    Route::put('/profil-kelurahan/gambaranumum/{gambaranumum}/update', [GambaranUmumController::class,'update'])->name('gambaranumum.update');
    Route::post('/profil-kelurahan/gambaranumum/', [GambaranUmumController::class,'store'])->name('gambaranumum.store');
});
// end dashboard


// Profile Routes
Route::prefix('profil')->group(function () {
    Route::get('/visi-misi',[FrontendController::class,'visimisi'])->name('visimisi');
    
    Route::get('/gambaran-umum', [FrontendController::class,'gambaranumum'])->name('gambaran.umum');
    
    Route::get('/sejarah', [FrontendController::class,'sejarah'])->name('sejarah');
    Route::get('/struktur-organisasi',[FrontendController::class,'struktur_organisasi'])->name('struktur.organisasi');
});

// Berita Routes
Route::prefix('berita')->group(function () {
    Route::get('/',[FrontendController::class,'berita'])->name('berita');
    Route::get('{berita:slug}/detail', [FrontendController::class,'detailberita'])->name('detail.berita');
    Route::get('/sambutan-lurah/{sambutanLurah:slug}/detail', [FrontendController::class,'sambutanlurah'])->name('sambutanlurah');
});

// Statistik Routes
Route::prefix('statistik')->group(function () {
    
    Route::get('/jenis-kelamin',[StatistikController::class,'jenis_kelamin'])->name('jenis_kelamin');
    Route::get('/agama',[StatistikController::class,'agama'])->name('agama');
    Route::get('/pekerjaan',[StatistikController::class,'pekerjaan'])->name('pekerjaan');
    Route::get('/pendidikan',[StatistikController::class,'pendidikan'])->name('pendidikan');
    Route::get('/kelompok-umur',[StatistikController::class,'kelompok_umur'])->name('kelompok_umur');
    
});


// Kelembagaan Routes
Route::get('/pkk', function () {
    return view('pages.kelembagaan.pkk');
});

Route::get('/lpm', function () {
    return view('pages.kelembagaan.lpm');
});





// Pelayannan Routes
Route::get('/surat-keterangan-kelahiran', function () {
    return view('pages.pelayannan.surat_kelahiran');
});

Route::get('/surat-keterangan-kematian', function () {
    return view('pages.pelayannan.surat_kematian');
});

Route::get('/surat-pengantar-pembuatan-ktp', function () {
    return view('pages.pelayannan.pembuatan_ktp');
});

Route::get('/surat-pengantar-pembuatan-kk', function () {
    return view('pages.pelayannan.pembuatan_kk');
});

Route::get('/surat-rekomendasi-izin-kegiatan-keramaian', function () {
    return view('pages.pelayannan.izin_keramaian');
});

// Pengaduan Routes
Route::get('/pengaduan', function () {
    return view('pages.pengaduan.index');
});

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
