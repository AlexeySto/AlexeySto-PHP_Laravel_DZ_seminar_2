<?php

use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\TestCollection;

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

Route::get('/test', TestController::class);

Route::get('/user', [FormProcessor::class, 'index']);
Route::post('/user', [FormProcessor::class, 'store'])->name('store-user');
