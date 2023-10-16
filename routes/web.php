<?php


use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegistrationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('navbar');
});

Route::resource('/students', StudentController::class);
Route::resource('/profs', ProfController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/exams', ExamController::class);
Route::resource('/registrations', RegistrationController::class);
Route::resource('/invoices', InvoiceController::class);

Route::get('report/report1/{pid}', [ReportController::class, 'report1']);