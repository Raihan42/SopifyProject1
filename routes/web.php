<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SLTest1Controlller;

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

Route::get('/', function () {
    return view('welcome to raihan ');
});
Route::get('/hello/{name?}',[SLTest1Controlller::class,'hello']);
Route::post('/spr',[SLTest1Controlller::class,'managePostRequest']);

