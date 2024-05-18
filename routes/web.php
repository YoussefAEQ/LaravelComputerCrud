<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

Route::resource('computers', ComputerController::class);
