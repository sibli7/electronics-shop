<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\sharkController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/product',[sharkController::class, 'index']);
Route::get('/search',[sharkController::class, 'search']);
Route::get('/fetch',[sharkController::class, 'fetch']);


Route::get('/',[HomeController::class, 'welcome_page']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/home',[HomeController::class, 'home']);
// Route::get('/product',[HomeController::class, 'product']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/product_dtls/{id}',[HomeController::class, 'product_dtls']);

Route::get('/load_category',[HomeController::class, 'load_category']);


Route::get('/author/signin',[AuthorController::class, 'signin']);
Route::get('/author/register',[AuthorController::class, 'register']);

Route::get('/author/product_a',[AddProductController::class, 'product_a']);
Route::post('/author/store',[AddProductController::class, 'store']);
Route::get('/author/home',[AddProductController::class, 'home']);
Route::get('/author/create_user',[AddProductController::class, 'create_user']);
Route::post('/author/create_ctgry',[AddProductController::class, 'category']);
Route::get('/author/category_frm_dspl',[AddProductController::class, 'categoryPage']);
