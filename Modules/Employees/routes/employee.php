<?php

use Illuminate\Support\Facades\Route;
use Modules\Employees\App\Http\Controllers\EmployeesController;

Route::middleware(['PermissionCheck'])->controller(EmployeesController::class)->group(function () {
    Route::get('/employees', 'index')->name('index');
    Route::get('/employees/create', 'create')->name('employees.create');
    Route::get('/employees/edit/{id}', 'edit')->name('employees.edit');
    Route::get('/employees/destroy/{id}', 'destroy')->name('employees.destroy');
});
Route::controller(EmployeesController::class)->group(function () {
    Route::post('/employees/store', 'store')->name('employees.store');
    Route::post('/employees/update/{id}', 'update')->name('employees.update');
    Route::get('/employees/restore/{id}', 'restore')->name('employees.restore');
});
