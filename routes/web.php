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

Route::get('/',[LoginRegisterFishermen::class,'index'])->name('I');
Route::get('/login',[LoginRegisterFishermen::class,'loginIndex']) ->name('FLI');
Route::get('/register',[LoginRegisterFishermen::class,'RegisterIndex']) ->name('FRI');
Route::post('/login',[LoginRegisterFishermen::class,'Login']) -> name('FL');
Route::post('/register',[LoginRegisterFishermen::class,'Register']) -> name('FR'); 

Route::get('/Fhome',[Home::class,'Findex']) -> name('FH');
Route::get('/Ahome',[Home::class,'Aindex']) -> name('AH');


