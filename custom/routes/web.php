<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;


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
})->name('welcome');
Route::group(['middleware'=>'guest'],function(){
 Route::get('/login',[Authcontroller::class,'index'])->name('login');
 Route::post('/login',[Authcontroller::class,'login'])->name('login')->middleware('throttle:2,3');
});
Route::get('/register',[Authcontroller::class,'register_view'])->name('register');
Route::post('/register',[Authcontroller::class,'register'])->name('register');
Route::group(['middleware'=>'auth'],function(){
 Route::get('/home',[Authcontroller::class,'home'])->name('home');
 Route::get('/logout',[Authcontroller::class,'logout'])->name('logout');
});