<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('landing');

Route::view('/index', 'index')->name('index');
