<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\DashboardController;

// Admin Route
Auth::routes([
    'register' => false, // Registration Routes...
    'reset'    => false, // Password Reset Routes...
    'verify'   => false, // Email Verification Routes...
]);

Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //front page section -> About
    Route::resource('abouts', AboutController::class)->only(['index', 'edit', 'update']);
    Route::get('/remove-abouts-image', [AboutController::class, 'removeAboutImage'])->name('remove.abouts.image');

});
