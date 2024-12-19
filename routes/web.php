<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class,'loadStudentPage']);
Route::get('/add-student',[StudentController::class,'loadAddStudentForm']);
Route::get('/edit-student/{id}',[StudentController::class,'loadEditStudentForm']);
Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent']);
Route::post('/set-student',[StudentController::class,'addStudent'])->name('addStudent');
Route::post('/update-student',[StudentController::class,'editStudent'])->name('editStudent');
