<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChoseController;
use App\Http\Controllers\cms\BlogController;
use App\Http\Controllers\cms\ChooseController;
use App\Http\Controllers\cms\ContactController;
use App\Http\Controllers\cms\EmployeeController;
use App\Http\Controllers\cms\FinanceController;
use App\Http\Controllers\cms\HRController;
use App\Http\Controllers\cms\MannageclientController;
use App\Http\Controllers\cms\PerfomanceController;
use App\Http\Controllers\cms\PerformanceController;
use App\Http\Controllers\cms\ProjectController;
use App\Http\Controllers\cms\ProvideController;
use App\Http\Controllers\cms\ReportCotroller;
use App\Http\Controllers\cms\ServicesController;
use App\Http\Controllers\cms\SliderController;
use App\Http\Controllers\cms\TaskController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\cms\ServiceController;
use App\Http\Controllers\cms\TestimonislController;
use App\Http\Controllers\ProvidingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homeIndex');
Route::get('/service', [ServiceController::class, 'index'])->name('serviceIndex');
Route::get('/providing', [ProvidingController::class, 'index'])->name('providingIndex');
Route::get('/chose us', [ChoseController::class, 'index'])->name('choseIndex');
Route::get('/admin', [AdminController::class, 'index'])->name('adminIndex');
Route::get('/admin/employee/index', [EmployeeController::class, 'index'])->name('employeeIndex');
Route::get('/admin/Hr/index', [HRController::class, 'index'])->name('HrIndex');
Route::get('/admin/finance/index', [FinanceController::class, 'index'])->name('financeIndex');
Route::get('/admin/task/index', [TaskController::class, 'index'])->name('taskIndex');
Route::get('/admin/performance/index', [PerformanceController::class, 'index'])->name('performanceIndex');
Route::get('/admin/projects/index', [ProjectController::class, 'index'])->name('projectsIndex');
Route::get('/admin/report/index', [ReportCotroller::class, 'index'])->name('reportIndex');
Route::get('/admin/clients/index', [MannageclientController::class, 'index'])->name('clientsIndex');
Route::get('/admin/blog/index', [BlogController::class, 'index'])->name('blogIndex');


Route::resource('/admin/slider', SliderController::class);
Route::resource('/admin/contact', ContactController::class);
Route::resource('/admin/service', ServiceController::class);
Route::resource('/admin/providing', ProvideController::class);
Route::resource('admin/testimonial', TestimonislController::class);
Route::resource('/admin/choose', ChooseController::class);
