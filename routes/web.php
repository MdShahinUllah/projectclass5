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
Route::get('/product',[\App\Http\Controllers\productController::class,'productData']);

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

