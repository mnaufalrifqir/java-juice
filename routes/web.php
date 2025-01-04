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
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnersController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/products', [FrontController::class, 'products'])->name('front.product');
Route::get('/product/{product:id}', [FrontController::class, 'details'])->name('front.details');

Route::prefix('about')->name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'about'])->name('about');
    Route::get('/team', [FrontController::class, 'team'])->name('team');
});

Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');

Route::post('/notification', [TransactionController::class, 'notificationHandler']);
Route::get('/success', [FrontController::class, 'success'])->name('front.success');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::post('/cart/update/{cartId}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::delete('/cart/remove/{cartId}', [CartController::class, 'removeFromCart'])->name('cart.removeFromCart');

    Route::get('/checkout', [TransactionController::class, 'checkout'])->name('transactions.checkout');
    Route::get('/cities/{provinceId}', [TransactionController::class, 'getCities']);
    Route::post('/shipping-cost', [TransactionController::class, 'getShippingCost']);

    Route::post('/payment', [TransactionController::class, 'payment'])->name('transactions.payment');

    Route::get('/orders', [TransactionController::class, 'order'])->name('front.orders.index');
    Route::get('/orders/{transaction_id}', [TransactionController::class, 'details'])->name('front.orders.show');

    Route::get('/orders/{transaction_id}/review', [TestimonialController::class, 'create'])->name('front.review.create');
    Route::post('/orders/{transaction_id}/review', [TestimonialController::class, 'store'])->name('front.review.store');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage statistics')->group(function () {
            Route::resource('statistics', CompanyStatisticController::class);
        });
    
        Route::middleware('can:manage products')->group(function () {
            Route::resource('products', ProductController::class);
        });
    
        Route::middleware('can:manage teams')->group(function () {
            Route::resource('teams', OurTeamController::class);
        });
    
        Route::middleware('can:manage hero sections')->group(function () {
            Route::put('/hero_sections/{id}/set-primary', [HeroSectionController::class, 'setPrimary'])->name('hero_sections.setPrimary');
            Route::resource('hero_sections', HeroSectionController::class);
        });

        Route::middleware('can:manage transactions')->group(function () {
            Route::resource('transactions', TransactionController::class);
        });

        Route::middleware('can:manage categories')->group(function () {
            Route::resource('categories', CategoryController::class);
        });

        Route::middleware('can:manage partners')->group(function () {
            Route::resource('partners', PartnersController::class);
        });
    });
});

require __DIR__.'/auth.php';