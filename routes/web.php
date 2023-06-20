<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/', function () {
    return view('pages.index');
});

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::get('/visi-misi', function () {
    return view('pages.profil_kelurahan.visi_misi');
});

Route::get('/gambaran-umum', function () {
    return view('pages.profil_kelurahan.gambaran_umum');
});

Route::get('/sejarah', function () {
    return view('pages.profil_kelurahan.sejarah');
});

Route::get('/struktur-organisasi', function () {
    return view('pages.profil_kelurahan.struktur_organisasi');
});

// Kelembagaan Routes
Route::get('/pkk', function () {
    return view('pages.kelembagaan.pkk');
});

Route::get('/lpm', function () {
    return view('pages.kelembagaan.lpm');
});

// Berita Routes
Route::get('/berita', function () {
    return view('pages.berita.index');
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
