<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

// Route::get('/welcome', function () {
//     return "Chào mừng bạn";
// });

Route::get('/',[App\Http\Controllers\UserController::class,'Hello' ]);

Route::get('/tinhtong',[App\Http\Controllers\TinhtongController::class,'index']);
Route::post('/tinh',[App\Http\Controllers\TinhtongController::class,'tinhtong']);
Route::get('/tamgiacvang',[App\Http\Controllers\TamgiacController::class,'Hinhtamgiac']);
Route::post('/tamgiacvang',[App\Http\Controllers\TamgiacController::class,'tinhtamgiac']);
Route::get('/tugiac',[App\Http\Controllers\TugiacController::class,'Hinhtugiac']);
Route::post('/tugiac',[App\Http\Controllers\TugiacController::class,'tinhtugiac']);


Route::get('/Form',[App\Http\Controllers\SignupController::class,'index']);
Route::post('/Form',[App\Http\Controllers\SignupController::class,'displayInfor']);

Route::get('/create', [App\Http\Controllers\RoomController::class,'create']);
Route::post('/create', [App\Http\Controllers\RoomController::class,'store'])->name('rooms.store');
 
Route::get('/master', [App\Http\Controllers\PageController::class,'getIndex']);
Route::get('trangchu',[App\Http\Controllers\PageController::class, 'getIndex']);


Route::get('/laravel',function(){
    Schema::create('products', function($table){
        $table->increments('id');
        $table->string('ten',200);
    });
    echo"da thuc hien tao lenh thanh cong";

});
Route::get('/chitiet_sanpham/{id}',[App\Http\Controllers\PageController::class, 'getChitiet']);
Route::get('/about', [App\Http\Controllers\PageController::class,'getAboutus']);
Route::get('contact',[App\Http\Controllers\PageController::class, 'getLienhe']);
Route::get('/type/{id}',[PageController::class,'getLoaiSp']);