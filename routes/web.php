<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PurchaseController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/items', function (){
    return Inertia::render('items');
})->name('items');

Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store'])->name('users.index');

Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/create', [ItemController::class, 'create']);
Route::post('/items', [ItemController::class, 'store'])->name('items.index');

Route::get('/purchases', [PurchaseController::class, 'index'])->name('purchases');
Route::get('/purchases/create', [PurchaseController::class, 'create']);
Route::post('/purchases', [PurchaseController::class, 'store'])->name('purchases.index');

Route::get('/sales', [SaleController::class, 'index'])->name('sales');
Route::get('/sales/create', [SaleController::class, 'create']);
Route::post('/sales', [SaleController::class, 'store'])->name('sales.index');