<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Services;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/services', 'services');
