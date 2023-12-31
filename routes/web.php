<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransactionController;

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

Route::get('/login', function () {
    return view('/auth/login');
});
Route::get('/forgot', function () {
    return view('/auth/forgotPassword');
});
Route::get('/signup', function () {
    return view('/auth/signup');
});
Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });



Route::get('/menu',[MenuController::class, 'index'])->name('indexMenu');



Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/profile', function () {
//     return view('profile');
// });
// Route::get('/checkout', function () {
//     return view('checkout');
// });
// Route::get('/cart', function () {
//     return view('cart');
// });


Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/signup',[AuthController::class, 'register'])->name('register');
Route::get('/cekUser',[AuthController::class, 'cekUser'])->name('cekuser');

Route::prefix('admin')->group(function () {
    // Route untuk halaman utama admin
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

    // Route untuk mengelola produk
    Route::get('produks', [ProdukController::class, 'index']);
    Route::get('produks/create', [ProdukController::class, 'create'])->name('admin.produks.create');;
    Route::post('produks/store', [ProdukController::class, 'store'])->name('admin.produks.store');
    Route::get('produks/update/{id}', [ProdukController::class, 'edit']);
    Route::put('produks/update/{id}', [ProdukController::class, 'update'])->name('admin.produks.update');
    Route::delete('produks/delete/{id}',[ProdukController::class, 'delete'])->name('admin.produks.delete');
    Route::get('orders',[OrderController::class,'index'])->name('admin.orders.indes');
    Route::get('orders/detail/{id}',[OrderController::class,'detailOrder'])->name('admin.orders.detail');
    Route::put('orders/status/update/{id}',[OrderController::class,'updateStatusOrder'])->name('admin.orders.update.status');
    
    // Tambahkan rute lainnya sesuai kebutuhan admin
});


Route::middleware(['auth'])->group(function () {
    // Rute-rute yang memerlukan autentikasi di sini
    Route::get('/profile', [UserController::class, 'profile'])->name('profile.user');

    Route::put('/profile/update', [UserController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/checkout', [CartController::class, 'checkout']);
    Route::post('/checkout/order', [CartController::class, 'order'])->name('checkout.order');
    Route::get('/profile/address', [UserController::class,'showAddress'])->name('address.index');
    Route::get('/profile/address/edit/{id}', [UserController::class,'editAddress'])->name('address.edit');
    Route::put('/profile/address/edit/{id}', [UserController::class,'updateAddress'])->name('address.update');
    Route::get('/profile/address/add', [UserController::class,'addAddress'])->name('address.add');
    Route::post('/profile/address/add', [UserController::class,'storeAddress'])->name('storeAddress');
    Route::put('/profile/update-profile-picture', [UserController::class, 'updateProfilePicture'])->name('profile.update-profile-picture');
    Route::get('/cart/{id}', [CartController::class, 'addItemToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::get('/profile/transaction',[TransactionController::class,'showOrder'])->name('profile.transaction');
});



// Route::get('/profile/transaction', function () {
//     return view('/profile/transaction');
// });

