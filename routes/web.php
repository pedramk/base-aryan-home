<?php

use App\Http\Controllers\HRController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hr/people', [HRController::class, 'list'])->name('hr.people.list');

Route::get('hr/people/create', [HRController::class, 'create']);
Route::post('hr/people/create', [HRController::class, 'store']);