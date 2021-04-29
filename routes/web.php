<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterFishermen;

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
Route::get('/',[LoginRegisterFishermen::class,'index']);
Route::get('/login',[LoginRegisterFishermen::class,'loginIndex']) ->name('FL');
Route::get('/register',[LoginRegisterFishermen::class,'RegisterIndex']) ->name('FR');



