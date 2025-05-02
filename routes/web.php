<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\ScheduleController;


// Главная страница с расписанием
Route::get('/', [ScheduleController::class, 'index']);


Route::get('/', [GroupController::class, 'index'])->name('groups.index');
Route::get('/create', [GroupController::class, 'create'])->name('groups.create');
Route::post('/create', [GroupController::class, 'store'])->name('groups.store');

Route::get('/athlets/create', [AthleteController::class, 'create'])->name('athlets.create');
Route::post('/athlets', [AthleteController::class, 'store'])->name('athlets.store');
// Маршруты для тренеров
Route::resource('coaches', CoachController::class);

// Маршруты для групп
Route::resource('groups', GroupController::class);

// Маршруты для спортсменов
Route::resource('athletes', AthleteController::class);

