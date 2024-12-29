<?php

use App\Http\Controllers\HRController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hr/person/create', [HRController::class, 'create']);