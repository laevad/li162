<?php

use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Products;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
   Route::get('products', Products::class)->name('products');
});

require __DIR__.'/auth.php';
