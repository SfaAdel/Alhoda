<?php

use App\Http\Controllers\Front\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');








Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/property-details/{id}', [HomeController::class, 'property_details'])->name('property.details');
Route::get('/properties/tag/{tag}', [HomeController::class, 'filterByTag'])->name('properties.filterByTag');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details', [HomeController::class, 'blog_details'])->name('blog_details');






// require __DIR__.'/auth.php';
