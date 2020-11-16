<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientProdukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//tampilan admin
    //login
Route::get('loginAdmin', [AuthController::class, 'showLoginAdmin']);
Route::get('registration', [AuthController::class, 'registration']);
    //beranda
Route::get('beranda', [HomeController::class, 'showBeranda']); //laravel8
        // Route::get('/beranda', 'showBeranda@HomeController']); laravel 7
Route::get('produk', [HomeController::class, 'showProduk']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);

//produk controller
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


//produk controller
Route::get('/', [ClientProdukController::class, 'home']);
Route::get('produk_single/{produk}', [ClientProdukController::class, 'show']);
//tampilan user
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produk_single', function () {
    return view('produk_single');
});

//upload gambar
Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');