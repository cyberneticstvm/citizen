<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
})->name('index');*/

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
    Route::prefix('/survey')->controller(WebController::class)->group(function () {
        Route::get('/{slug}', 'survey')->name('survey');
        Route::post('/{slug}', 'saveSurvey')->name('survey.save');
    });
});
