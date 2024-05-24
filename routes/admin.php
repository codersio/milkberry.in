<?php

use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AdminController::class, 'create'])->name('admin/login');
Route::post('admin/log-store', [AdminController::class, 'store']);
Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
], function () {
    Route::get('/logout', [AdminController::class, 'destroy']);

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product-store', [ProductController::class, 'store'])->name('product-store');
    Route::get('/product-delete/{id}', [ProductController::class, 'productDelete'])->name('product-delete');
    Route::post('/product-update/{id}', [ProductController::class, 'productUpdate'])->name('product-update');

    // category data
    Route::get('/category', [CategoryController::class, 'category'])->name('product-update')->name('category');
    Route::post('/category-create', [CategoryController::class, 'store'])->name('category-create');
    Route::post('/category-update/{category}', [CategoryController::class, 'update'])->name('category-update');
    Route::get('/category-delete/{category}', [CategoryController::class, 'delete']);
    // product type
    Route::get('/product-type', [CategoryController::class, 'productType'])->name('product-update')->name('category');
    Route::post('/product-type-create', [CategoryController::class, 'ProductTypeStore'])->name('product-type-create');
    Route::post('/product-type-update/{id}', [CategoryController::class, 'ProductTypeUpdate'])->name('product-type-update');
    Route::get('/product-type-delete/{id}', [CategoryController::class, 'producttypeDelete'])->name('product-type-delete');

    // aboutus

    Route::get('/aboutus', [AboutusController::class, 'aboutus'])->name('product-update')->name('category');
    Route::post('/aboutus-create', [AboutusController::class, 'aboutusStore'])->name('aboutus-create');
    Route::post('/aboutus-update/{category}', [AboutusController::class, 'aboutusUpdate'])->name('aboutus-update');
    Route::get('/aboutus-delete/{id}', [AboutusController::class, 'delete'])->name('aboutus-delete');

    // contact
    Route::get('/contact', [ContactController::class, 'contact']);
    Route::post('/contact-create', [ContactController::class, 'store'])->name('contact-create');
    Route::post('/contact-update/{id}', [ContactController::class, 'update'])->name('contact-update');
    Route::get('/contact-delete/{id}', [ContactController::class, 'contactDelete'])->name('contact-delete');
    Route::get('/gallery', [MediaController::class, 'index']);
    Route::post('/upload-media', [MediaController::class, 'uploadMedia'])->name('uploadMedia');
    Route::get('/delete-media/{id}', [MediaController::class, 'deleteMedia'])->name('delete');

    // slider
    Route::get('/slider', [MediaController::class, 'slider']);
    Route::post('/slider-create', [MediaController::class, 'sliderStore'])->name('slider-create');

    Route::get('/slider-delete/{id}', [MediaController::class, 'sliderDelete'])->name('slider-delete');

    // social-links

    Route::get('/social-links', [AdminController::class, 'socialLinks']);
    Route::post('/social-links-create', [AdminController::class, 'socialLinksStore'])->name('social-links-create');
    Route::post('/social-links-update/{id}', [AdminController::class, 'socialLinksUpdate'])->name('social-links-update');
    Route::get('/social-links-delete/{id}', [AdminController::class, 'socialLinksDelete'])->name('social-links-delete');

    Route::post('/bulkupload',[ProductController::class,'BulkImageUpload']);
    Route::get('/download',[ProductController::class,'exportSampleData']);

    Route::post('subcategory',[CategoryController::class,'subcategorystore']);
    Route::get('subcategory-form',[CategoryController::class,'subcategory']);
    Route::post('subcategory-update/{id}',[CategoryController::class,'uodateSubcategory']);
    Route::get('delete/{id}',[CategoryController::class,'subcategoryDelete']);
    
    Route::post('multidelete',[ProductController::class,'multiPleDelete']);
});
