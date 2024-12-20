<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;

// --------------------------------------------------------------------------------------------------------
// -------------------------------------------- Public Routes ---------------------------------------------
// --------------------------------------------------------------------------------------------------------

Route::get('/Home', function () {
    return view('AquaVist.pages.testHome');
});

Route::get('/About', function () {
    return view('AquaVist.pages.testAboutUs');
});

Route::get('/Product', function () {
    return view('AquaVist.pages.testProducts');
});

Route::get('/Gallery', function () {
    return view('AquaVist.pages.testGallery');
});

Route::get('/Blog', function () {
    return view('AquaVist.pages.testBlog');
});


Route::get('/Viewblog', function () {
    return view('AquaVist.pages.testViewblog');
});

Route::get('/Contact-Us', function () {
    return view('AquaVist.pages.testContact');
});

Route::post('/Contact', [ContactController::class, 'store'])->name('contact.store');

// --------------------------------------------------------------------------------------------------------
// --------------------------------------------- Admin Routes ---------------------------------------------
// --------------------------------------------------------------------------------------------------------

// Routes for Admin Dashboard 
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Routes for Products
Route::get('/product-list', function () {
    return view('admin.products');
})->name('products.view');

Route::get('/admin/products', [ProductController::class, 'getProducts'])->name('product.get');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::post('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');


// Routes for Product Categories
Route::get('/categories', [ProductCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [ProductCategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [ProductCategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/delete/{id}', [ProductCategoryController::class, 'delete'])->name('categories.delete');
Route::get('/categories/edit/{id}', [ProductCategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [ProductCategoryController::class, 'update'])->name('categories.update');


// Middlewares
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Message Section
    Route::get('/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::get('/messages/{id}', [ContactController::class, 'show'])->name('admin.messages.show');
});

require __DIR__ . '/auth.php';
