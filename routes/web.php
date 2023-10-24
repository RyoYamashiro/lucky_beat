<?php

use App\Http\Controllers\front\Beat\DetailAction;
use App\Http\Controllers\front\Index\IndexAction;
use App\Http\Controllers\User\EditAction;
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

Route::get('/', IndexAction::class)->name('index');
Auth::routes();

// TODO::user以降をパラメータとしてuser_identified_nameの値にする。
Route::get('/user/ryoyama/edit', EditAction::class)->name('user.edit');

Route::get('/beat/noon/detail', DetailAction::class)->name('beat.detail');