<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('home'));
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
Route::get('/detail/{slug}', [ProductController::class, 'show'])->name('produk.show');
Route::get('/category/{slug}', [ProductController::class, 'category'])->name('produk.category');
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/services', fn() => view('services'));
// Route::get('/detailproduk', fn() => view('detailproduk'))->name('detailproduk');
Route::get('/social', fn() => view('social'))->name('social');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login')->with('success', 'Berhasil logout!');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected with auth)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', fn() => view('admin.dashboard'))->name('admin.dashboard');

    // CRUD Products (pakai ProductController)
    Route::resource('products', ProdukController::class);

    // CRUD Pesan
    Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index');
    Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('pesan.store');
    Route::delete('/pesan/{pesan}', [PesanController::class, 'destroy'])->name('pesan.destroy');
});

use App\Http\Controllers\Admin\CategoryController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
});

