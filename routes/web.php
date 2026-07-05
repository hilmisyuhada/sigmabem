<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Landing Page (Awal)
Route::get('/', function () {
    return view('welcome'); // Mengarah ke landing page yang sudah diperbarui
});

// 2. Halaman Login
Route::get('/login-test', function () {
    return view('auth.login');
});

// 3. Halaman Dashboard
Route::get('/dashboard-test', function () {
    return view('dashboard');
});

// 4. Halaman Format Proposal
Route::get('/proposal-test', function () {
    return view('proposal.index'); // Daftar Proposal
});

Route::get('/proposal-detail-test', function () {
    return view('proposal.show'); // Detail RAB Proposal
});

// 5. Halaman Format LPJ
Route::get('/lpj-test', function () {
    return view('lpj.index'); // Daftar LPJ
});

Route::get('/lpj-detail-test', function () {
    return view('lpj.show'); // Detail RAB LPJ
});

// 6. Halaman About
Route::get('/about-test', function () {
    return view('about');
});
