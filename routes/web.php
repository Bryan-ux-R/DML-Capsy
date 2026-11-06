<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - PT Duta Mitra Luhur (Duta Rubber)
|--------------------------------------------------------------------------
*/

// PBI 04 - Akses Company Profile Tanpa Login
Route::get('/', [CompanyController::class, 'index'])->name('home');
Route::get('/tentang-pabrik', [CompanyController::class, 'about'])->name('about');
Route::get('/spesifikasi-teknis', [CompanyController::class, 'technicalSpecs'])->name('specs');
Route::get('/kontak', [CompanyController::class, 'contact'])->name('contact');

// PBI 05 & PBI 06 - Katalog Produk, Filter, Pencarian, & Detail Produk
Route::get('/katalog', [ProductController::class, 'index'])->name('catalog.index');
Route::get('/katalog/{slug}', [ProductController::class, 'show'])->name('catalog.show');

// PBI 09, PBI 10, PBI 11 - Form Tanya Ketersediaan, Validasi & WA Redirect
Route::get('/tanya-ketersediaan', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/tanya-ketersediaan', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/inquiry/sukses/{number}', [InquiryController::class, 'success'])->name('inquiry.success');
