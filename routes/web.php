<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::redirect('/', 'login');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    return Inertia::render('Products');
})->middleware(['auth', 'verified'])->name('products');

Route::get('/stock', function () {
    return Inertia::render('Stock');
})->middleware(['auth', 'verified'])->name('stock');

Route::get('/entries', function () {
    return Inertia::render('Entries');
})->middleware(['auth', 'verified'])->name('entries');

Route::get('/sales', function () {
    return Inertia::render('Sales');
})->middleware(['auth', 'verified'])->name('sales');

Route::get('/administration', function () {
    return Inertia::render('Administration');
})->middleware(['auth', 'verified'])->name('administration');

Route::get('/clients', function () {
    return Inertia::render('Clients');
})->middleware(['auth', 'verified'])->name('clients');

Route::get('/users', function () {
    return Inertia::render('Users');
})->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

