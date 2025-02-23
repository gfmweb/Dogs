<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MyController::class, 'index']);
