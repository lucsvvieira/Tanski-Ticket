<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PriorityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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

Route::get('/test', [TestController::class, 'index'] );

Route::resource('/clients', ClientController::class);

// GET|HEAD        clients ..................................................... clients.index › ClientController@index
// POST            clients ..................................................... clients.store › ClientController@store
// GET|HEAD        clients/create ............................................ clients.create › ClientController@create
// GET|HEAD        clients/{client} .............................................. clients.show › ClientController@show
// PUT|PATCH       clients/{client} .......................................... clients.update › ClientController@update
// DELETE          clients/{client} ........................................ clients.destroy › ClientController@destroy
// GET|HEAD        clients/{client}/edit ......................................... clients.edit › ClientController@edit
// GET|HEAD        sanctum/csrf-cookie .............. sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
// GET|HEAD        test .......................................................................... TestController@index

Route::resource('/users', UserController::class);

Route::resource('/priorities', PriorityController::class);
