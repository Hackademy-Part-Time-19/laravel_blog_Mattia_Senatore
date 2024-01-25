<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/welcome',function(){
    return view('pages.welcome');
});
Route::get('/chi sono',function(){
    return view('pages.chi sono');
});
Route::get('/articoli',function(){
    return view('pages.articoli');
});
