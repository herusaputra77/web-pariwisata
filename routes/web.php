<?php

use App\Http\Controllers\admin\BerandaAdmin;
use App\Http\Controllers\admin\ContentAdmin;
use App\Http\Controllers\admin\JadwalEventController;
use App\Http\Controllers\admin\KategoriAdmin;
use App\Http\Controllers\admin\SliderAdmin;
use App\Http\Controllers\admin\UserAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/search', [HomeController::class, 'search']);
Route::get('/detail-destinasi/{id}', [HomeController::class, 'detail_destinasi']);

Route::get('/kategori/{id}', [WisataController::class, 'kategori']);
Route::get('/event-bulan/{id}', [HomeController::class, 'event_bulan']);
// admin
Route::group(['middleware' =>['auth'],'prefix' => 'admin','as' => 'admin'], function(){
Route::get('beranda', [BerandaAdmin::class,'index']);
// User
Route::get('user',[UserAdmin::class,'index']);
Route::post('add-user',[UserAdmin::class,'create']);
Route::get('delete-user/{id}',[UserAdmin::class,'destroy']);
Route::post('edit-user',[UserAdmin::class,'update']);
Route::post('gantiPass-user',[UserAdmin::class,'ganti_pass']);


// master
// kategori
Route::get('kategori',[KategoriAdmin::class,'index']);
Route::post('add-kategori',[KategoriAdmin::class,'create']);
Route::get('delete-kategori/{id}',[KategoriAdmin::class,'destroy']);
Route::post('edit-kategori',[KategoriAdmin::class,'update']);


// content
Route::get('content',[ContentAdmin::class,'index']);
Route::post('add-content',[ContentAdmin::class,'create']);
Route::get('delete-content/{id}',[ContentAdmin::class,'destroy']);
Route::post('edit-content',[ContentAdmin::class,'update']);
// slider
Route::get('slider',[SliderAdmin::class,'index']);
Route::post('add-slider',[SliderAdmin::class,'create']);
Route::get('delete-slider/{id}',[SliderAdmin::class,'destroy']);
Route::post('edit-slider',[SliderAdmin::class,'update']);

// jadwal event

Route::get('jadwal-event',[JadwalEventController::class,'index']);
Route::post('add-event',[JadwalEventController::class,'create']);
Route::get('delete-event/{id}',[JadwalEventController::class,'destroy']);
Route::post('edit-event',[JadwalEventController::class,'update']);


});
// Route::get('/login', function(){
//     return view('login');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
