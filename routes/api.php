<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\arduino\UseController;


Route::post('/arduino', [UseController::class, 'index']);