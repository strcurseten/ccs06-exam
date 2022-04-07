<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('begin', [StudentsController::class, 'begin']);
Route::post('enter-grade', [StudentsController::class, 'enterGrades']);
Route::post('compute-grades', [StudentsController::class, 'computeGrades']);
