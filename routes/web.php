<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', \App\Http\Livewire\PageTree::class);
Route::get('/page', \App\Http\Livewire\ShowPages::class);
Route::get('/page/add', \App\Http\Livewire\CreatePage::class);
Route::get('/page/edit/{page}', \App\Http\Livewire\EditPage::class);
