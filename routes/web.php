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

Route::get('/',[\App\Http\Controllers\frontend\homeController::class,'home'])->name('home');
Route::get('/product/details',[\App\Http\Controllers\frontend\homeController::class,'productDetail'])->name('productDetail');
Route::get('/contact/us',[\App\Http\Controllers\frontend\homeController::class,'contactUs'])->name('contactUs');
Route::get('/contacts/us',[\App\Http\Controllers\frontend\homeController::class,'contactUs2'])->name('contactsUs');

//Products
Route::get('/product/list',[\App\Http\Controllers\backend\productController::class,'product'])->name('admin.product');
Route::get('/product/create',[\App\Http\Controllers\backend\productController::class,'create'])->name('product.create');
Route::post('/product/create',[\App\Http\Controllers\backend\productController::class,'store']);
Route::get('/product/{id}/edit',[\App\Http\Controllers\backend\productController::class,'edit'])->name('product.edit');
Route::post('/product/{id}/edit',[\App\Http\Controllers\backend\productController::class,'update']);


//frondend login Form
Route::post('/user/login',[\App\Http\Controllers\frontend\loginFormController::class,'index'])->name('user.login');
Route::get('/user/profile',[\App\Http\Controllers\frontend\userController::class,'profile'])->name('user.profile');
Route::post('/user/profile',[\App\Http\Controllers\frontend\userController::class,'editProfile']);


Route::get('/user/logout',[\App\Http\Controllers\frontend\userController::class,'logout'])->name('user.logout');

Route::middleware(['AdminCheck'])->group(function (){
    Route::middleware(['auth'])->group(function () {

    Route::get('/product_upload',[\App\Http\Controllers\productController::class,'productForm']);
    Route::post('/product_upload_data',[\App\Http\Controllers\productController::class,'productFormData'])->name('productFromData');

    Route::get('/admin',[\App\Http\Controllers\backend\dashboardController::class,'index'])->name('admin');
    Route::get('/admin/users',[\App\Http\Controllers\backend\usersController::class,'index'])->name('admin.users');
    Route::get('/admin/profile',[\App\Http\Controllers\backend\usersController::class,'profile'])->name('admin.profile');
    Route::post('/admin/profile',[\App\Http\Controllers\backend\usersController::class,'editProfile']);
    Route::get('/admin/logout',[\App\Http\Controllers\backend\usersController::class,'logout'])->name('admin.logout');

    });
});
    Route::get('/admin/login',[\App\Http\Controllers\backend\loginController::class,'index'])->name('admin.login');
    Route::post('/admin/login',[\App\Http\Controllers\backend\loginController::class,'submit']);

