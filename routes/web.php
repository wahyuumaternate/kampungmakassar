<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GambaranUmumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SambutanLurahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\SejarahController;
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
Route::prefix('administrator/dashboard')->group(function () {
    
    Route::get('/',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
    //berita
    Route::get('/berita/semua-berita', [BeritaController::class,'index'])->middleware(['auth'])->name('berita.index');
    Route::get('/berita/tambah-berita', [BeritaController::class,'create'])->middleware(['auth'])->name('berita.tambah');
    Route::post('/berita/tambah-berita/store', [BeritaController::class,'store'])->middleware(['auth'])->name('berita.store');
    Route::get('/berita/{berita:slug}/edit-berita', [BeritaController::class,'edit'])->middleware(['auth'])->name('berita.edit');
    Route::put('/berita/{berita:slug}/edit-berita', [BeritaController::class,'update'])->middleware(['auth'])->name('berita.update');
    Route::delete('/berita/{berita:slug}', [BeritaController::class,'destroy'])->middleware(['auth'])->name('berita.delete');
    //struktur organisani
    Route::get('/profil-kelurahan/struktur-organisasi', [StrukturOrganisasiController::class,'index'])->middleware(['auth'])->name('organisasi.index');
    Route::post('/profil-kelurahan/tambah-struktur-organisasi/store', [StrukturOrganisasiController::class,'store'])->middleware(['auth'])->name('organisasi.store');
    Route::get('/profil-kelurahan/{struktur_organisasi:slug}/edit-struktur-organisasi', [StrukturOrganisasiController::class,'edit'])->middleware(['auth'])->name('organisasi.edit');
    Route::put('/profil-kelurahan/{struktur_organisasi:slug}/edit-struktur-organisasi', [StrukturOrganisasiController::class,'update'])->middleware(['auth'])->name('organisasi.update');
    Route::delete('/profil-kelurahan/{struktur_organisasi:slug}', [StrukturOrganisasiController::class,'destroy'])->middleware(['auth'])->name('organisasi.delete');
    // sambutan Lurah
    Route::get('/sambutan-lurah', [SambutanLurahController::class,'edit'])->middleware(['auth'])->name('lurah.index'); 
    Route::post('/sambutan-lurah', [SambutanLurahController::class,'store'])->middleware(['auth'])->name('lurah.store'); 
    Route::put('/sambutan-lurah/{sambutan}/update', [SambutanLurahController::class,'update'])->middleware(['auth'])->name('lurah.update');
    // visimisi
    Route::get('/profil-kelurahan/visi-misi', [VisiMisiController::class,'edit'])->middleware(['auth'])->name('visimisi.index');
    Route::put('/profil-kelurahan/visi-misi/{visiMisi}/update', [VisiMisiController::class,'update'])->middleware(['auth'])->name('visimisi.update');
    Route::post('/profil-kelurahan/visi-misi/', [VisiMisiController::class,'store'])->middleware(['auth'])->name('visimisi.store');
    // sejarah
    Route::get('/profil-kelurahan/sejarah', [SejarahController::class,'edit'])->middleware(['auth'])->name('sejarah.index');
    Route::put('/profil-kelurahan/sejarah/{sejarah}/update', [SejarahController::class,'update'])->middleware(['auth'])->name('sejarah.update');
    Route::post('/profil-kelurahan/sejarah/', [SejarahController::class,'store'])->middleware(['auth'])->name('sejarah.store');
    // gambaran umum
    Route::get('/profil-kelurahan/gambaranumum', [GambaranUmumController::class,'edit'])->middleware(['auth'])->name('gambaranumum.index');
    Route::put('/profil-kelurahan/gambaranumum/{gambaranumum}/update', [GambaranUmumController::class,'update'])->middleware(['auth'])->name('gambaranumum.update');
    Route::post('/profil-kelurahan/gambaranumum/', [GambaranUmumController::class,'store'])->middleware(['auth'])->name('gambaranumum.store');
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
    
});
Route::get('/sambutan-lurah/{sambutanLurah:slug}/detail', [FrontendController::class,'sambutanlurah'])->name('sambutanlurah');


// Kelembagaan Routes
Route::get('/pkk', function () {
    return view('pages.kelembagaan.pkk');
});

Route::get('/lpm', function () {
    return view('pages.kelembagaan.lpm');
});


// Statistik Kelurahan Routes
Route::get('/jenis-kelamin', function () {
    return view('pages.statistik_kelurahan.jenis_kelamin');
});

Route::get('/agama', function () {
    return view('pages.statistik_kelurahan.agama');
});

Route::get('/pekerjaan', function () {
    return view('pages.statistik_kelurahan.pekerjaan');
});

Route::get('/pendidikan', function () {
    return view('pages.statistik_kelurahan.pendidikan');
});

Route::get('/kelompok-umur', function () {
    return view('pages.statistik_kelurahan.kelompok_umur');
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
