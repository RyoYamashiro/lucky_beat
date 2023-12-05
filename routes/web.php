<?php

use App\Http\Controllers\Front\Beat\DetailAction;
use App\Http\Controllers\Front\Beat\CustomAction;
use App\Http\Controllers\Front\Beat\CustomEditAction;
use App\Http\Controllers\Front\Beat\EditAction as BeatEditAction;
use App\Http\Controllers\Front\contact\ShowContactFormAction;
use App\Http\Controllers\Front\Index\IndexAction;
use App\Http\Controllers\Front\User\DetailAction as UserDetailAction;
use App\Http\Controllers\Front\User\UpdateAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\User\EditAction;

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
Auth::routes([
    'verify' => true,
]);

Route::get('/user/{user}/edit', EditAction::class)->name('user.edit');
Route::post('/user/{user}/', UpdateAction::class)->name('user.update');
Route::get('/user/{user}/', UserDetailAction::class)->name('user.detail');


Route::get('/beat/noon/detail', DetailAction::class)->name('beat.detail');
Route::get('/beat/noon/custom', CustomAction::class)->name('beat.custom');
Route::get('/beat/noon/edit', BeatEditAction::class)->name('beat.edit');
Route::get('/beat/noon/edit/custom', CustomEditAction::class)->name('beat.custom.edit');
Route::get('/contact', ShowContactFormAction::class)->name('contact');