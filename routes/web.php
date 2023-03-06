<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('car', [HomeController::class, 'all'])->name('cars.all');
Route::get('home', [HomeController::class, 'view'])->name('home_page');
Route::get('about-us', [HomeController::class, 'show'])->name('about_us');
Route::get('contact-us', [HomeController::class, 'get'])->name('contact_us');
Route::get('gallery', [HomeController::class, 'form'])->name('gallery_page');
Route::get('blog', [HomeController::class, 'list'])->name('blog');
Route::get('coupe', [HomeController::class, 'create'])->name('coupe');
Route::get('sedan', [HomeController::class, 'live'])->name('sedan');
Route::get('suv', [HomeController::class, 'host'])->name('suv');
Route::get('our-service', [HomeController::class, 'for'])->name('our_service');
Route::get('details-page/{id}', [HomeController::class, 'page'])->name('details_page');

Route::get('edit', [HomeController::class, 'edit'])->name('edit_image');
Route::post('save', [HomeController::class, 'save'])->name('save_image');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


    Route::get('add-brand', [BrandController::class, 'index'])->name('add_brand');
    Route::get('all-brand', [BrandController::class, 'host'])->name('all_brand');

    Route::get('inbox', [BrandController::class, 'all'])->name('inbox.all');

    Route::get('calender', [BrandController::class, 'call'])->name('calender.call');

    Route::get('add-car', [CarController::class, 'create'])->name('car.create');

    Route::get('all-car', [CarController::class, 'host'])->name('all_car');

    Route::post('/store-car', [CarController::class, 'store'])->name('car.store');
    Route::post('/store-brand', [CarController::class, 'view'])->name('car.view');

    // Laravel 8 & 9
Route::get('/payment/callback', [CarController::class, 'handleGatewayCallback'])->name('callback');
Route::post('/payment/callback', [CarController::class, 'redirectToGateway'])->name('pay');

});

require __DIR__.'/auth.php';
