<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\product\CategoryController;
use App\Http\Controllers\product\BrandController;
use App\Http\Controllers\product\ProductController;
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
    return view('welcome');
});

Route::group([
    'prefix'=>'admin',
    'middleware'=>'admin',
    'as'=>'admin'
], function (){
    Route::get('/' , [AdminController::class, 'dashboard'])->name('.index');
    Route::get('/update/category/{id}' , [CategoryController::class, 'edit'])->name('.updateCategory');
    Route::get('/update/brand/{id}' , [BrandController::class, 'edit'])->name('.updateBrand');

    //category
    Route::get('/category', [CategoryController::class, 'index'])->name('.category');
    Route::post('/category', [CategoryController::class, 'store'])->name('.category');
    Route::delete('/category', [CategoryController::class, 'destroy'])->name('.category');
    Route::put('/category', [CategoryController::class, 'update'])->name('.category');


    //brand
    Route::get('/brand', [BrandController::class, 'index'])->name('.brand');
    Route::post('/brand', [BrandController::class, 'store'])->name('.brand');
    Route::delete('/brand', [BrandController::class, 'destroy'])->name('.brand');
    Route::put('/brand', [BrandController::class, 'update'])->name('.brand');

    Route::get('/product', [AdminController::class,'product' ])->name('.product');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
