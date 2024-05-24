<?php

use App\Http\Controllers\ContactformController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('frontend/Media');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/product-category/{slug}', [HomeController::class, 'ProductWithcategory']);
Route::get('/media', [HomeController::class, 'gallery']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/cantact-us', [HomeController::class, 'Contact']);
Route::post('/contactform', [ContactformController::class, 'contactStoreMail']);
Route::get('/Slider', [HomeController::class, 'Slider']);

Route::get('product-sub-category/{slug}',[HomeController::class,'subcateSlug']);

Route::get('category/sub-category/{slug}',[HomeController::class,'subcategoryall']);
Route::get('category/sub-category/product/{id}/{slug}',[HomeController::class,'subsubcategoryall']);
Route::get('category/sub-category/sub/product/{slug}',[HomeController::class,'subsubsubcategory']);
Route::get('category/product/{slug}',[HomeController::class,'categoryProduct']);

// Clear application cache:

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});
//Clear route cache:

Route::get('/route-cache', function() {
Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});
//Clear config cache:

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});
// Clear view cache:

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

Route::get('test-mail',[ContactformController::class,'Mailtest']);
