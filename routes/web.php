<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\ScheduleController;


// Главная страница с расписанием
Route::get('/', [ScheduleController::class, 'index']);
// Маршруты для тренеров
Route::resource('coaches', CoachController::class);

// Маршруты для групп
Route::resource('groups', GroupController::class);

// Маршруты для спортсменов
Route::resource('athletes', AthleteController::class);

