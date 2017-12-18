<?php

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

Route::get('/', ['uses' => 'home@index'])->name("home");

Route::get('/login', ['uses' => 'home@login'])->name('login');

Route::post('/login', ['uses' => 'home@postLogin'])->name("post-login");

Route::get('/logout', ['uses' => 'home@logout'])->name('logout');
