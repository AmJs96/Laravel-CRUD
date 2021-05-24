<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CatController;

Route::resource('cats', CatController::class);
