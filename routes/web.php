<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SLTest1Controlller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GQLController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something gr00eat!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/groups', [FaqController::class, 'groupIndex'])->middleware(['verify.shopify'])
    ->name('group.index');

Route::post('/groups', [FaqController::class, 'groupStore'])
->middleware(['verify.shopify'])
->name('group.store');

//Route::get('/products', [ProductController::class,'index']
//)->middleware(['verify.shopify'])->name('products.index');

//Route::get("/products",[SLTest1Controlller::class,'shopGetRequest'])->name('products')->middleware(['verify.shopify']);

Route::get('/gql/users/{userName}',[GQLController::class,'getUser']);

Route::get('/hello/{name?}',[SLTest1Controlller::class,'hello']);
Route::post('/spr',[SLTest1Controlller::class,'managePostRequest']);


