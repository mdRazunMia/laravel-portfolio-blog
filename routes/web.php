<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('portfolio.index');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/blog')->middleware('auth')->group(function () {
    Route::get('/',[BlogController::class, 'index'])->name('blog.index');
    Route::get('/create',[BlogController::class, 'create'])->name('blog.create');
    Route::post('/',[BlogController::class, 'store'])->name('blog.store');
    Route::get('/{id}/edit',[BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/id',[BlogController::class, 'update'])->name('blog.update');
    Route::delete('/id',[BlogController::class, 'destroy'])->name('blog.destroy');
});

