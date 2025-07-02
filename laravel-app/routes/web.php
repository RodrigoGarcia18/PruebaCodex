<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;

Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('appointments', AppointmentController::class)->only(['index', 'create', 'store']);
});
