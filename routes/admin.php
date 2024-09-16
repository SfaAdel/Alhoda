<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Property;

Route::name('dashboard')->get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');

Route::group([
    'prefix' => 'dashboard',
    'as' => 'admin.',
    'middleware' => ['auth:admin'] // Remove 'dashboard' if it's not a valid middleware
], function () {
    // Resource routes


    // Admins
    Route::resource('admins', AdminController::class, ['except' => 'show']);
    // Route::patch('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::resource('tags', TagController::class, ['except' => 'show']);
    Route::resource('blogs', BlogController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('Properties', PropertyController::class);

    // Route::patch('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');


});

Route::middleware('auth:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
