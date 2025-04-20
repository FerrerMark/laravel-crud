<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('index');
});

Route::get('/students', [StudentController::class, 'showStudents']);
Route::post('/students', [StudentController::class, 'addStudents']);
Route::delete('/students/{id}', [StudentController::class, 'deleteStudents']);

Route::get('/students/{id}/edit', [StudentController::class, 'editStudent']);

Route::put('/students/{id}', [StudentController::class, 'updateStudent']);
Route::get('/students', [StudentController::class, 'searchStudents']);


Route::get('/login', function () {
    return view('login');
});


