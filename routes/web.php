<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allmedicines;
use App\Http\Controllers\medicinedetails;
use App\Http\Controllers\browsemedicines;
use App\Http\Controllers\searchmedicines;
use App\Http\Controllers\showsubscribe;
use App\Http\Controllers\showlogin;
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

Route::get('/', [allmedicines::class, 'index']);

Route::get('search', [searchmedicines::class, 'index'])->name('search');
Route::get('autocomplete', [searchmedicines::class, 'autocomplete'])->name('autocomplete');

Route::get('/details/{slug}', [medicinedetails::class, 'show']);

Route::get('/browse', [browsemedicines::class, 'show'])->name('browse');
Route::get('browse/bmd', [browsemedicines::class, 'showajax']);

Route::get('/subscribe', [showsubscribe::class, 'show'])->name('subscribe');
Route::get('/login', [showlogin::class, 'show'])->name('login');