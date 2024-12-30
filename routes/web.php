<?php

use App\Http\Controllers\HRController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hr/people', [HRController::class, 'index']);

Route::get('hr/people/create', [HRController::class, 'create']);
Route::post('hr/people/create', [HRController::class, 'store']);