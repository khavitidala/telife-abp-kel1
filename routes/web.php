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
Route::get('/',"App\Http\Controllers\AkunController@beranda")->name("beranda");
Route::get('/login',"App\Http\Controllers\AkunController@index")->name("login");
Route::get('/register',"App\Http\Controllers\AkunController@register")->name("register");
Route::get('/about',"App\Http\Controllers\AkunController@about")->name("about");
Route::get('/contact',"App\Http\Controllers\AkunController@feedback")->name("feedback");
Route::get('/chat',"App\Http\Controllers\AkunController@chat")->name("chat");
Route::get('/faq',"App\Http\Controllers\AkunController@about")->name("faq");
Route::get('/profile',"App\Http\Controllers\AkunController@profile")->name("profile");
Route::post('/login',"App\Http\Controllers\AkunController@store_akun")->name("store_akun");
Route::post('/loginpost',"App\Http\Controllers\AkunController@loginPost")->name("loginpost");
Route::get('/logout',"App\Http\Controllers\AkunController@logout")->name("logout");
Route::get('/admin',"App\Http\Controllers\AdminController@index")->name("admin");
Route::get('/feedback',"App\Http\Controllers\FeedbackController@index")->name("feedback");
Route::post('/feedback',"App\Http\Controllers\FeedbackController@store")->name("storefeedback");
Route::get('/profile_pasien',"App\Http\Controllers\PasienController@index")->name("profile_pasien");
Route::get('/profile_konselor',"App\Http\Controllers\KonselorController@index")->name("profile_konselor");
Route::get('/profile_pasien/create',"App\Http\Controllers\AdminController@create_pasien")->name("create_profile_pasien");
Route::get('/profile_konselor/create',"App\Http\Controllers\AdminController@create_konselor")->name("create_profile_konselor");
Route::post('/profile_pasien',"App\Http\Controllers\AdminController@store_pasien")->name("store_profile_pasien");
Route::post('/profile_konselor',"App\Http\Controllers\AdminController@store_konselor")->name("store_profile_konselor");
Route::delete('/profile_pasien/delete/{id}',"App\Http\Controllers\AdminController@destroy_pasien")->name("destroy_profile_pasien");
Route::delete('/profile_konselor/delete/{id}',"App\Http\Controllers\AdminController@destroy_konselor")->name("destroy_profile_konselor");
Route::put('/profile_pasien/{id}',"App\Http\Controllers\PasienController@update")->name("update_pasien");
Route::put('/profile_konselor/{id}',"App\Http\Controllers\KonselorController@update")->name("update_konselor");

