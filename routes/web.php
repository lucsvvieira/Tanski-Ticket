<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OccurrencyAttachment;
use App\Http\Controllers\OccurrencyAttachmentController;
use App\Http\Controllers\OccurrencyController;
use App\Http\Controllers\OccurrencyRecordsController;
use App\Http\Controllers\OccurrencyStatusController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\SlaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;

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
Route::get('/', [LoginController::class, 'login'])->name('login.page');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth.login');
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

Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/priorities', PriorityController::class)->middleware('auth');
Route::resource('/occurrency_status', OccurrencyStatusController::class)->middleware('auth');
Route::resource('/sla', SlaController::class)->middleware('auth');
Route::resource('/departments', DepartmentsController::class)->middleware('auth');
Route::resource('/categories', CategoriesController::class)->middleware('auth');
Route::resource('/occurrency_attachments', OccurrencyAttachmentController::class)->middleware('auth');
Route::resource('/occurrency_records', OccurrencyRecordsController::class)->middleware('auth');
Route::resource('/user_types', UserTypeController::class)->middleware('auth');
Route::resource('/occurrences', OccurrencyController::class)->middleware('auth');