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

    Route::get('/department', [Deparment::class, 'index']);
    
    Route::get('/employee', [Employee::class, 'index']);
    Route::post('addemp',[Employee::class,'addemp'])->name('addemp');
    Route::get('viewemp',[Employee::class,'viewemp'])->name('viewemp');
    Route::get('emp-edit/{id}',[Employee::class,'edit']);
    Route::post('emp-update/{id}',[Employee::class,'update']);
    Route::get('emp-delete/{id}',[Employee::class,'delete']);







});


