<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Shafira Maulana Jamil - 362258302082 - 2F TRPL
// Buat sebuah project baru laravel beserta seeder dan migrasi untuk kasus diatas (sudah)
// Home page (/home)
// product page (/products) //daftar produk bunga u pelanggan
// login admin (/admin/login)
// fitur crud dan dashboard (/dashboard)
// formulir kontak dapat diakses dengan klik icon wa saja