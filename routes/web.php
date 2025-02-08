<?php


use App\Http\Controllers\admin\addController;
use App\Http\Controllers\admin\deleteController;
use App\Http\Controllers\admin\editController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\listController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\use\index;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/home',[index::class,'home'])->name('home');

// list categories va products 
Route::get('/listcate',[listController::class,'listCategories'])->name('admin.categories.listCategories');
Route::get('/listpro',[listController::class,'listProducts'])->name('admin.products.listProducts');

// add products
Route::get('/admin/products/addform', [addController::class, 'showAddForm'])->name('admin.products.addform');
Route::post('/admin/products', [addController::class, 'addProducts']);
// add categories

// Route để hiển thị form thêm danh mục
Route::get('/admin/categories/addCategoriesForm', [AddController::class, 'addCategoriesForm'])->name('admin.categories.addCategoriesForm');

// Route để xử lý thêm danh mục
Route::post('/admin/categories', [AddController::class, 'addCategories'])->name('admin.categories.addCategories');

// Route để hiển thị form chỉnh sửa danh mục
Route::get('/admin/categories/edit/{id}', [editController::class, 'editCategories'])->name('admin.categories.editCategories');

// Route để xử lý cập nhật danh mục
Route::put('/admin/categories/update/{id}', [editController::class, 'updateCategories'])->name('admin.categories.updateCategories');



// update 
Route::get('/admin/products/edit/{id}', [EditController::class, 'editProducts'])->name('admin.products.editProducts');
Route::put('/admin/products/update/{id}', [EditController::class, 'updateProducts'])->name('admin.products.updateProducts');

// delete Prodcts
Route::delete('/admin/products/{id}', [deleteController::class, 'deleteProduct'])->name('admin.products.deleteProduct');
// delete categories
Route::delete('/admin/categories/{id}', [deleteController::class, 'deleteCategories'])->name('admin.categories.deleteCategories');
// show 
// routes/web.php

Route::get('/admin/products/{id}',[listController::class,'listShowProducts'])->name('admin.products.show');



