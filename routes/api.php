<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\EmployeeController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::apiResource('employees', EmployeeController::class);


Route::controller(EmployeeController::class)->group(function () {
    Route::get('employees', 'index');
    Route::post('employees', 'store');
    Route::get('employees/{employee:employee_id}', 'show');
    Route::delete('employees/{employee:employee_id}', 'destroy');
});
