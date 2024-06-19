<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
Route::get('',[SiteController::class, 'index'])->name('index');
Route::get('make-order/{id}',[SiteController::class, 'makeOrder'])->name('make-order');
Route::post('send-order/{id}',[SiteController::class, 'sendOrder'])->name('send-order');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
