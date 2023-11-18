<?php

use App\Http\Controllers\front\Beat\DetailAction;
use App\Http\Controllers\front\Beat\CustomAction;
use App\Http\Controllers\front\Beat\EditAction as BeatEditAction;
use App\Http\Controllers\front\contact\ShowContactFormAction;
use App\Http\Controllers\front\Index\IndexAction;
use App\Http\Controllers\front\User\DetailAction as UserDetailAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\User\EditAction;

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
Route::get('/user/ryoyama/', UserDetailAction::class)->name('user.detail');

Route::get('/beat/noon/detail', DetailAction::class)->name('beat.detail');
Route::get('/beat/noon/custom', CustomAction::class)->name('beat.custom');
Route::get('/beat/noon/edit', BeatEditAction::class)->name('beat.custom');
Route::get('/contact', ShowContactFormAction::class)->name('contact');