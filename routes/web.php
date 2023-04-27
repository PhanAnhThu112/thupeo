<?php

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