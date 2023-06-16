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

Route::get('/dashboard', function () {
    return view('dashboard');
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
