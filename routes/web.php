<?php

use App\Http\Controllers\ContainerController;
use App\Http\Controllers\HomeController;
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

Route::middleware(["auth"])->group(function () {
   Route::get('/', [HomeController::class, 'index'])->name('home');
   Route::get('/container/detail/{container}', [ContainerController::class, 'detail'])->name('container.detail');
   Route::get('/container/detail/period/{date1}/{date2}/{container}', [ContainerController::class, 'detailPeriod'])->name('container.detail.period');
   Route::post('/period', [ContainerController::class, 'period'])->name('period');

   Route::post('cont/store', [ContainerController::class, 'store'])->name('container.store');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
