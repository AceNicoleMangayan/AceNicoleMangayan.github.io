<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;


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
});

Route::view('register','register');
Route::view('login','login');

Route::post('registerUser', [RestoController::class, 'registerUser']);
Route::post('loginUser',[RestoController::class, 'login']);

Route::group(['middleware'=>'customAuth'],function(){
Route::get('/list', [RestoController::class, 'list']);
Route::get('delete/{id}',[RestoController::class, 'destroy']);
Route::view('register','register');
Route::view('login','login');
Route::get('logout', [RestoController::class, 'logout']);
});