<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TempFileController;
use App\Http\Controllers\TestController;
use App\Models\TempFile;
use Illuminate\Support\Facades\Auth;
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
//in testing branch
Auth::routes([
    'register' => false
]);

Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/', [HomeController::class, 'index'])->name('index');
});
Route::resource('categories', CategoryController::class);
Route::get('test', [TestController::class, 'index']);
Route::post('upload', [TestController::class, 'upload'])->name('upload');
Route::post('temp/store', [TempFileController::class, 'store'])->name('temp.store');
