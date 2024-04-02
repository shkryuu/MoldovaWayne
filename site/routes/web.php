<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
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
    return view('pages.home');
});

Route::get('/admin', [SliderController::class, 'index'])->name('pages.admin.slides');
Route::get('/admin/slides/create', [SliderController::class, 'create'])->name('pages.admin.add-slide');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
