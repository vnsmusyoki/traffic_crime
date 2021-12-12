<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\PagesCOntroller;
use App\Http\Controllers\traffic\TrafficOfficerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);
Route::get('/', [PagesCOntroller::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('driver/dashboard', [DriverController::class, 'index'])->name('driver');
Route::prefix('driver')->group(function () {
    Route::get('upload-vehicle', [DriverController::class, 'uploadvehicle']);
    Route::post('upload-license', [DriverController::class, 'uploadlicense']);
});
// Route
Route::get('traffic/dashboard', [TrafficOfficerController::class, 'index'])->name('officer');
Route::prefix('officer')->group(function () {
    Route::get('driver-offense', [TrafficOfficerController::class, 'addoffense']);
    Route::post('search-license', [TrafficOfficerController::class, 'searchlicense']);
    Route::post('add-license', [TrafficOfficerController::class, 'adddriverlicense']);
});

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin');
Route::prefix('admin')->group(function () {
    Route::get('add-crime', [AdminController::class, 'addcrime']);
    Route::post('upload-crime', [AdminController::class, 'uploadcrime']);
    Route::get('all-crimes', [AdminController::class, 'allcrimes']);
    Route::get('edit-crime/{id}', [AdminController::class, 'editcrime']);
    Route::patch('update-crime/{id}', [AdminController::class, 'updatecrime']);
    Route::get('delete-crime/{id}', [AdminController::class, 'deletecrime']);
    Route::get('upload-checkpoint', [AdminController::class, 'uploadcheckpoint']);
    Route::post('store-checkpoint', [AdminController::class, 'storecheckpoint']);
    Route::get('all-checkpoints', [AdminController::class, 'allcheckpoints']);
    Route::get('edit-checkpoint/{id}', [AdminController::class, 'editcheckpoint']);
    Route::patch('update-checkpoint/{id}', [AdminController::class, 'updatecheckpoint']);
    Route::get('delete-checkpoint/{id}', [AdminController::class, 'deletecheckpoint']);
    Route::get('add-officer', [AdminController::class, 'addofficer']);
    Route::post('upload-officer', [AdminController::class, 'uploadofficer']);
    Route::get('all-officers', [AdminController::class, 'allofficers']);
});
//
