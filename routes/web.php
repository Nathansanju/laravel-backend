<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/employeeList', [EmployeeController::class, 'employeeList']);
Route::get('/addEmployee', [EmployeeController::class, 'addEmployee']);
Route::get('/editEmployee/{id}', [EmployeeController::class, 'editEmployee']);
Route::post('/submitEmployee', [EmployeeController::class, 'submitEmployee']);
Route::post('/updateEmployee', [EmployeeController::class, 'updateEmployee']);
Route::get('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);
Route::get('/viewEmployee/{id}', [EmployeeController::class, 'viewEmployee']);
Route::post('/backEmployee', [EmployeeController::class, 'backEmployee']);








Route::get('/adminList', [AdminController::class, 'adminList']);
Route::get('/addAdmin', [AdminController::class, 'addAdmin']);
Route::get('/editAdmin/{id}', [AdminController::class, 'editAdmin']);
Route::post('/submitAdmin', [AdminController::class, 'submitAdmin']);
Route::post('/updateAdmin', [AdminController::class, 'updateAdmin']);
Route::get('/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin']);
Route::get('/viewAdmin/{id}', [AdminController::class, 'viewAdmin']);
Route::post('/backAdmin', [AdminController::class, 'backAdmin']);







