<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingpageController::class, 'index']);
