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

Route::get('/', function () {
    return view('frontend.layouts.app');
});

// Menu Profil Routes
Route::get('/profil', function () {
    return view('frontend.Profil.index');
});

Route::get('/visi-misi', function () {
    return view('frontend.Profil.visi');
});

Route::get('/tupoksi', function () {
    return view('frontend.Profil.tupoksi');
});

Route::get('/struktur-organisasi', function () {
    return view('frontend.Profil.struktur-organisasi');
});

Route::get('/geografi', function () {
    return view('frontend.Profil.geografi');
});

Route::get('/demografi', function () {
    return view('frontend.Profil.demografi');
});

Route::get('/organisasi-kemasyarakatan', function () {
    return view('frontend.Profil.organisasi-kemasyarakatan');
});
// End Profil Routes

// Menu Informasi Publik Routes

// End Informasi Publik Routes

