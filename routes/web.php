<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index');});
Route::get('/portal', function () { return view('portal');});