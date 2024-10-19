<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyStatisticController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TransactionController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/products', [FrontController::class, 'products'])->name('front.product');
// Route::get('/product/{product:id}', [FrontController::class, 'product'])->name('front.product');
Route::prefix('about')->name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'about'])->name('about');
    Route::get('/team', [FrontController::class, 'team'])->name('team');
});

Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'index'])->name('front.cart');
    Route::get('/transaction', [TransactionController::class, 'transaction'])->name('front.transaction');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage statistics')->group(function () {
            Route::resource('statistics', CompanyStatisticController::class);
        });
    
        Route::middleware('can:manage products')->group(function () {
            Route::resource('products', ProductController::class);
        });

        Route::middleware('can:manage testimonials')->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });
    
        Route::middleware('can:manage teams')->group(function () {
            Route::resource('teams', OurTeamController::class);
        });
    
        Route::middleware('can:manage hero sections')->group(function () {
            Route::resource('hero_sections', HeroSectionController::class);
        });
    });
});

require __DIR__.'/auth.php';