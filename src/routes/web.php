
<?php

use Guardian\ExceptionTracker\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/guardian', [DashboardController::class, 'index'])->name('guardian.dashboard');
});
