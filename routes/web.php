<?php

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

// Frontend Tanjungrejo Routes========================

// Beranda
Route::get('/kecamatan', function () {
    return view('frontend.pages.home');
});

// Profile
Route::get('/profile', function () {
    return view('frontend.pages.Profile.index');
});

Route::get('/profile/visi-misi', function () {
    return view('frontend.pages.Profile.visi-misi');
});

Route::get('/profile/tupoksi', function () {
    return view('frontend.pages.Profile.tupoksi');
});

Route::get('/profile/struktur-organisasi', function () {
    return view('frontend.pages.Profile.struktur-organisasi');
});

Route::get('/profile/kondisi-geografi', function () {
    return view('frontend.pages.Profile.geografi');
});

Route::get('/profile/kondisi-demografi', function () {
    return view('frontend.pages.Profile.demografi');
});

Route::get('/profile/organisasi-kemasyarakatan', function () {
    return view('frontend.pages.Profile.organisasi-kemasyarakatan');
});

// Informasi Layanan 
Route::get('/layanan/informasi-layanan', function () {
    return view('frontend.pages.Layanan.info-layanan');
});

Route::get('/layanan/pengaduan', function () {
    return view('frontend.pages.Layanan.pengaduan');
});

Route::get('/layanan/staff', function () {
    return view('frontend.pages.Layanan.staff');
});

Route::get('/layanan/cek-bantuan', function () {
    return view('frontend.pages.Layanan.bantuan');
});

// Berita 
Route::get('/berita', function () {
    return view('frontend.pages.berita');
});

// Kontak & Pengaduan
Route::get('/kontak', function () {
    return view('frontend.pages.kontak');
});

// End Frontend Tanjungrejo Routes===============

// Frontend LPMK Kota Routes=====================
Route::get('/', function () {
    return view('frontend-kota.pages.home');
});

Route::get('/not-found', function () {
    return view('frontend-kota.error');
});

// End Frontend LPMK Kota Routes=================

// Auth Routes

// Login
Route::get('/login', function () {
    return view('auth.pages.login');
});

// Register
Route::get('/register', function () {
    return view('auth.pages.register');
})->name('register');

// Recover Password
Route::get('/recover-password', function () {
    return view('auth.pages.recover-password');
});

// Forgot Password
Route::get('/forgot-password', function () {
    return view('auth.pages.forgot-password');
});

// End Auth Routes

// Admin Routes

// Admin 
Route::get('/admin', function () {
    return view('admin-dashboard.pages.home');
})->name('admin-home');

// Data

// Data Advokasi Kebijakan
// CRUD - Data Advokasi Kebijakan
Route::get('admin/advokasi-kebijakan', [App\Http\Controllers\AdvokasiKebijakanController::class, 'index'])->name('advokasi-kebijakan');
Route::get('admin/advokasi-kebijakan/create', [App\Http\Controllers\AdvokasiKebijakanController::class, 'create'])->name('advokasi-kebijakan');
Route::post('admin/advokasi-kebijakan/create', [App\Http\Controllers\AdvokasiKebijakanController::class, 'store']);
Route::get('admin/advokasi-kebijakan/{id}/edit', [App\Http\Controllers\AdvokasiKebijakanController::class, 'edit']);
Route::put('admin/advokasi-kebijakan/{id}/edit', [App\Http\Controllers\AdvokasiKebijakanController::class, 'update']);
Route::get('admin/advokasi-kebijakan/{id}/delete', [App\Http\Controllers\AdvokasiKebijakanController::class, 'destroy']);

// End Admin Routes