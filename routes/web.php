<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ImageUploadController;


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
    return view('admin/login');
});
Route::get('/welcome', function () {
    return view('welcome'); // Make sure 'welcome.blade.php' is in the 'resources/views' directory
});

// Show the login form
Route::get('admin/hr/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('admin/hr/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//crud
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');  // Redirect to homepage after logging out
})->name('logout');
Route::post('/image-upload', [ImageUploadController::class, 'upload'])->name('image.upload');
// web.php

// Route to show the dashboard (GET request)
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route to handle form submission (POST request)
Route::post('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');



