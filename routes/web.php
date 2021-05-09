<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterAdmin;
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

//fisherman routes

//fisherman UnAuthed
Route::get('/',[LoginRegisterFishermen::class,'Index'])->name('I');
Route::get('/login',[LoginRegisterFishermen::class,'LoginIndex']) ->name('FLI');
Route::get('/register',[LoginRegisterFishermen::class,'RegisterIndex']) ->name('FRI');
Route::post('/login',[LoginRegisterFishermen::class,'Login']) -> name('FL');
Route::post('/register',[LoginRegisterFishermen::class,'Register']) -> name('FR'); 

//fisherman Authed
Route::get('/fishermanProfile',[Profile::class,'index']) -> name('P');

//admin routes

//admin UnAuthed
Route::get('/Admin',[LoginRegisterAdmin::class,'Index']) ->name('IA');
Route::get('/AdminLogin',[LoginRegisterAdmin::class,'LoginIndex']) -> name('ALI');
Route::get('/AdminRegister',[LoginRegisterAdmin::class,'RegisterIndex']) -> name('ARI');
Route::post('/AdminLogin',[LoginRegisterAdmin::class,'Login']) -> name('AL');
Route::post('/AdminRegister',[LoginRegisterAdmin::class,'Register']) -> name('AR');







