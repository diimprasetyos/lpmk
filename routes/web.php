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

Route::get('/lpmk-kecamatan', function () {
    return view('frontend-kota.pages.lpmk-kecamatan');
});

Route::get('/not-found', function () {
    return view('frontend-kota.error');
});

// End Frontend LPMK Kota Routes=================

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    // Admin Routes
    Route::group(['middleware' => 'checkrole'], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('admin/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');

        Route::get('admin/advokasi-kebijakan', [App\Http\Controllers\AdvokasiKebijakanController::class, 'index'])->name('advokasi-kebijakan');
        Route::get('admin/advokasi-kebijakan/print', [App\Http\Controllers\AdvokasiKebijakanController::class, 'print']);
        Route::get('admin/advokasi-kebijakan/create', [App\Http\Controllers\AdvokasiKebijakanController::class, 'create'])->name('advokasi-kebijakan');
        Route::post('admin/advokasi-kebijakan/create', [App\Http\Controllers\AdvokasiKebijakanController::class, 'store']);
        Route::get('admin/advokasi-kebijakan/{id}/edit', [App\Http\Controllers\AdvokasiKebijakanController::class, 'edit']);
        Route::put('admin/advokasi-kebijakan/{id}/edit', [App\Http\Controllers\AdvokasiKebijakanController::class, 'update']);
        Route::get('admin/advokasi-kebijakan/{id}/delete', [App\Http\Controllers\AdvokasiKebijakanController::class, 'destroy']);

        Route::get('admin/program-aspirasi', [App\Http\Controllers\ProgramAspirasiController::class, 'index'])->name('program-aspirasi');
        Route::get('admin/program-aspirasi/print', [App\Http\Controllers\ProgramAspirasiController::class, 'print']);
        Route::get('admin/program-aspirasi/create', [App\Http\Controllers\ProgramAspirasiController::class, 'create'])->name('program-aspirasi');
        Route::post('admin/program-aspirasi/create', [App\Http\Controllers\ProgramAspirasiController::class, 'store']);
        Route::get('admin/program-aspirasi/{id}/edit', [App\Http\Controllers\ProgramAspirasiController::class, 'edit']);
        Route::put('admin/program-aspirasi/{id}/edit', [App\Http\Controllers\ProgramAspirasiController::class, 'update']);
        Route::put('admin/program-aspirasi/{id}/update-status', [App\Http\Controllers\ProgramAspirasiController::class, 'updateStatus']);
        Route::get('admin/program-aspirasi/{id}/delete', [App\Http\Controllers\ProgramAspirasiController::class, 'destroy']);

        Route::get('admin/program-perawatan', [App\Http\Controllers\ProgramPerawatanController::class, 'index'])->name('program-perawatan');
        Route::get('admin/program-perawatan/print', [App\Http\Controllers\ProgramPerawatanController::class, 'print']);
        Route::get('admin/program-perawatan/create', [App\Http\Controllers\ProgramPerawatanController::class, 'create'])->name('program-perawatan');
        Route::post('admin/program-perawatan/create', [App\Http\Controllers\ProgramPerawatanController::class, 'store']);
        Route::get('admin/program-perawatan/{id}/edit', [App\Http\Controllers\ProgramPerawatanController::class, 'edit']);
        Route::put('admin/program-perawatan/{id}/edit', [App\Http\Controllers\ProgramPerawatanController::class, 'update']);
        Route::get('admin/program-perawatan/{id}/delete', [App\Http\Controllers\ProgramPerawatanController::class, 'destroy']);

        Route::get('admin/program-penguatan-sdm', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'index'])->name('program-penguatan-sdm');
        Route::get('admin/program-penguatan-sdm/print', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'print']);
        Route::get('admin/program-penguatan-sdm/create', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'create'])->name('program-penguatan-sdm');
        Route::post('admin/program-penguatan-sdm/create', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'store']);
        Route::get('admin/program-penguatan-sdm/{id}/edit', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'edit']);
        Route::put('admin/program-penguatan-sdm/{id}/edit', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'update']);
        Route::get('admin/program-penguatan-sdm/{id}/delete', [App\Http\Controllers\ProgramPenguatanSdmController::class, 'destroy']);

        Route::get('admin/program-penelitian', [App\Http\Controllers\ProgramPenelitianController::class, 'index'])->name('program-penelitian');
        Route::get('admin/program-penelitian/print', [App\Http\Controllers\ProgramPenelitianController::class, 'print']);
        Route::get('admin/program-penelitian/create', [App\Http\Controllers\ProgramPenelitianController::class, 'create'])->name('program-penelitian');
        Route::post('admin/program-penelitian/create', [App\Http\Controllers\ProgramPenelitianController::class, 'store']);
        Route::get('admin/program-penelitian/{id}/edit', [App\Http\Controllers\ProgramPenelitianController::class, 'edit']);
        Route::put('admin/program-penelitian/{id}/edit', [App\Http\Controllers\ProgramPenelitianController::class, 'update']);
        Route::get('admin/program-penelitian/{id}/delete', [App\Http\Controllers\ProgramPenelitianController::class, 'destroy']);

        Route::get('admin/mou', [App\Http\Controllers\MOUController::class, 'index'])->name('mou');
        Route::get('admin/mou/create', [App\Http\Controllers\MOUController::class, 'create'])->name('mou');
        Route::post('admin/mou/create', [App\Http\Controllers\MOUController::class, 'store']);
        Route::get('admin/mou/{id}/edit', [App\Http\Controllers\MOUController::class, 'edit']);
        Route::put('admin/mou/{id}/edit', [App\Http\Controllers\MOUController::class, 'update']);
        Route::get('admin/mou/{id}/delete', [App\Http\Controllers\MOUController::class, 'destroy']);

        Route::get('admin/program-wisata-sb', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'index'])->name('program-wisata-sb');
        Route::get('admin/program-wisata-sb/print', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'print']);
        Route::get('admin/program-wisata-sb/create', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'create'])->name('program-wisata-sb');
        Route::post('admin/program-wisata-sb/create', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'store']);
        Route::get('admin/program-wisata-sb/{id}/edit', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'edit']);
        Route::put('admin/program-wisata-sb/{id}/edit', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'update']);
        Route::get('admin/program-wisata-sb/{id}/delete', [App\Http\Controllers\ProgramWisataStudiBandingController::class, 'destroy']);
    });
    // End Admin Routes

});
