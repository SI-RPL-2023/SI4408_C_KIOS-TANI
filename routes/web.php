<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PartnershipController;
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

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Products Routes
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/filter/{id}', [ProductController::class, 'filter'])->name('filter');
    Route::get('/product/cart', [ProductController::class, 'cart'])->name('cart');
    Route::get('/product/payment', [ProductController::class, 'payment'])->name('payment');
    
    // Program Routes
    Route::get('/program', [ProgramController::class, 'index'])->name('program');

    // Partnership Routes
    Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
    
});

require __DIR__.'/auth.php';
