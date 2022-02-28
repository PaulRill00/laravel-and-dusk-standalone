<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ExampleController2;
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

Route::resource('/', ExampleController::class)->only([
  'index', 'create', 'store'
]);

// Route::resource('/', ExampleController2::class)->only([
//   'index'
// ]);