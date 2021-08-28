<?php

use App\Http\Controllers\Deparment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Designation;
use App\Http\Controllers\Employee;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('layouts.admin');
    });
    Route::get('/designation', [Designation::class, 'index']);
    Route::post('designation-add',[Designation::class,'descadd']);
    Route::get('desc-edit/{id}',[Designation::class,'edit']);
    Route::post('desc-update/{id}',[Designation::class,'update']);
    Route::get('desc-delete/{id}',[Designation::class,'delete']);

    Route::get('/department', [Deparment::class, 'index']);
    Route::post('department-add',[Deparment::class,'deptadd']);
    Route::get('edit/{id}',[Deparment::class,'edit']);
    Route::post('dept-update/{id}',[Deparment::class,'update']);
    Route::get('delete/{id}',[Deparment::class,'delete']);

    Route::get('/employee', [Employee::class, 'index']);
    Route::post('addemp',[Employee::class,'addemp'])->name('addemp');
    Route::get('viewemp',[Employee::class,'viewemp'])->name('viewemp');
    Route::get('emp-edit/{id}',[Employee::class,'edit']);
    Route::put('emp-update/{id}',[Employee::class,'update']);
    Route::get('emp-delete/{id}',[Employee::class,'delete']);


});


