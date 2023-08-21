<?php

use App\Http\Controllers\Details;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Details::class,'insert_form']);

Route::post('/create',[Details::class,'insert']);

Route::view('insert','insert_form');

Route::get('/list',[Details::class,'userlist']);

Route::get('/delete/{id}',[Details::class,'delete']);

Route::get('update/{id}',[Details::class,'edit']);
Route::post('update/{id}',[Details::class,'update']);

Route::view('addmore','insert_form');
