<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;

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

Route::get('/cars', 
    [CarController::class, 'index']
)->name('cars.index');

Route::get('/cars/create', 
    [CarController::class, 'create']
)->name('cars.create');

Route::post('/cars',
    [CarController::class, 'store']
)->name('cars.store');

Route::get('/cars/{id}', 
    [CarController::class, 'details']
)->name('cars.details');

Route::get('/cars/{id}/edit',
    [CarController::class, 'edit']
)->name('cars.edit');

Route::put('/cars/{id}',
    [CarController::class, 'update']
)->name('cars.update');

Route::delete('/cars/{id}',
    [CarController::class, 'delete']
)->name('cars.delete');

Route::get('/manufacturers',
    [ManufacturerController::class, 'index']
)->name('manufacturers.index');

