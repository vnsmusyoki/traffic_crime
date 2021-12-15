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
    Route::get('all-punishments', [DriverController::class, 'allpunishments']);
    Route::get('account-security', [DriverController::class, 'accountprofile']);
    Route::post('update-password', [DriverController::class, 'updatepassword']);
    Route::post('update-email', [DriverController::class, 'updateemail']);
    Route::post('update-avatar', [DriverController::class, 'updateavatar']);
});
// Route
Route::get('traffic/dashboard', [TrafficOfficerController::class, 'index'])->name('officer');
Route::prefix('officer')->group(function () {
    Route::get('driver-offense', [TrafficOfficerController::class, 'addoffense']);
    Route::post('search-license', [TrafficOfficerController::class, 'searchlicense']);
    Route::get('add-license', [TrafficOfficerController::class, 'adddriverlicense']);
    Route::get('driver-license/{idnumber}/{license}', [TrafficOfficerController::class, 'licensefound']);
    Route::post('upload-license', [TrafficOfficerController::class, 'uploadlicense']);
    Route::get('all-punishments', [TrafficOfficerController::class, 'allpunishments']);
    Route::post('upload-crime', [TrafficOfficerController::class, 'uploadcrime']);
    Route::get('account-security', [TrafficOfficerController::class, 'accountsecurity']);
    Route::post('update-password', [TrafficOfficerController::class, 'updatepassword']);
    Route::post('update-email', [TrafficOfficerController::class, 'updateemail']);
    Route::post('update-avatar', [TrafficOfficerController::class, 'updateavatar']);
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
    Route::get('account-security', [AdminController::class, 'accountsecurity']);
    Route::get('edit-officer/{officer}', [AdminController::class, 'editofficer']);
    Route::get('delete-officer/{officer}', [AdminController::class, 'deleteofficer']);
    Route::patch('edit_officer/{officer}', [AdminController::class, 'updateofficer']);
    Route::post('update-password', [AdminController::class, 'updatepassword']);
    Route::post('update-email', [AdminController::class, 'updateemail']);
    Route::post('update-avatar', [AdminController::class, 'updateavatar']);
    Route::get('notified-drivers', [AdminController::class, 'notifieddrivers']);
});
//
