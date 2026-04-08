<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehicleController;

Route::get('/', vehicleController::class. '@index')->name('vehicle.index');
Route::get('/create', vehicleController::class. '@create')->name('vehicle.create');
Route::post('/store', [VehicleController::class, 'store'])->name('vehicle.store');
Route::get('/edit/{id}', vehicleController::class. '@edit')->name('vehicle.edit');
Route::put('/update/{id}', vehicleController::class. '@update')->name('vehicle.update');
Route::delete('/delete/{id}', vehicleController::class. '@destroy')->name('vehicle.destroy');

