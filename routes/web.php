<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtsController;

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



// Route::get('/welcome', function () {
//   return view('welcome');
// });

// Route::get("/products", [ProductsController::class, "showData"])->name("allProducts");

// Route::get("/products/{id}", [ProductsController::class, "showDataById"]);

// Route::get("/products/delete/{id}", [ProductsController::class, "deleteProduct"])->name("product.delete");


// Auth::routes();




Route::get("/store", [StoreController::class, "showProducts"])->name("kolchi");

Route::get('/cameras', [StoreController::class, "showCameras"])->name("camerat");

Route::get('/laptops', [StoreController::class, "showLaps"])->name("laps");


Route::get('/phones', [StoreController::class, "showPhones"])->name("telephonat");


Route::get('name', function () {
  return 'Bonjour';
});
// Route::get('{name}', function ($name){
//   return 'Je suis '.$name;
// })->where('name','[a-zA-Z]+');
// Route::get('{name}/{prenom?}', function ($name, $prenom = '') {
//   return 'Je suis ' . $name . ' ' . $prenom;
// });

Route::get('/new', function () {
  return response('Hello', 404);
});



Route::get('/page1', function () {
  return view('page1');
})->name("pg1");

Route::view('/page2', 'page2')->name("pg2");

Route::get('/art/{num}', function ($num) {
  return view('article')->with('numero', $num);
})->where("num", '[0-9]{1,2}')->name("art", ['num' => '12']);

Route::view('/app', 'app')->name('app');

Route::get('/all', [ArticleController::class, 'ArticleShow']);



Route::get('/arts', [ArtsController::class, 'create']);


Route::post('/arts', [ArtsController::class, 'store'])->name('Arts');
