<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/category', [\App\Http\Controllers\HomeController::class, 'ir']);
Route::get('/vue', [\App\Http\Controllers\HomeController::class, 'mostrar']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
/*
Route::group ( ['prefix'=> 'Product'], function () {

    Route::Post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{products}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::Post('/update/{products}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{products}', [\App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
  

});
*/
Route::group ( ['prefix'=> 'Category'], function () {

    Route::Post('/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{categories}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::Post('/update/{categories}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{categories}', [\App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
  

});

Route::Post('/Product/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/edit/{product}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::Post('/update/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('/delete/{product}', [\App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');

