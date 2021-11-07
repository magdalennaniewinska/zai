<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::get('search/{tag}',[HomeController::class,'searchtag']);

Route::get('/showallproduct',[HomeController::class,'showallproduct']);

Route::post('/wypozycz/{id}',[HomeController::class,'wypozycz']);

Route::get('/product',[AdminController::class,'product']);

Route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

Route::get('/showproduct',[AdminController::class,'showproduct']);

Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);

Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

Route::get('/showstudents',[AdminController::class,'showstudents']);

Route::get('/deletestudent/{id}',[AdminController::class,'deletestudent']);

Route::get('/updatestudentview/{id}',[AdminController::class,'updatestudentview']);

Route::post('/updatestudent/{id}',[AdminController::class,'updatestudent']);

Route::get('/showcart',[HomeController::class,'showcart']);

Route::get('/delete/{id}',[HomeController::class,'deletecart']);

Route::get('/updatestudentcartview/{id}',[AdminController::class,'updatestudentcartview']);

Route::post('/updatestudentcart/{id}',[AdminController::class,'updatestudentcart']);

Route::post('/order',[AdminController::class,'confirmorder']);

Route::get('/showorder',[AdminController::class,'showorder']);


Route::post('/return',[AdminController::class,'return']);