<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RideController;
use App\Models\Ride;

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
    return view('index');
});
Route::get('/dashboard', function () {
    return view('welcome');
});
// -----------------------------   Rides Crud --------------------------------
Route::get('/addRide', [RideController::class, 'addRideview']);
// Route::get('/showsection',[sectionController::class,'viewRideView']);
Route::get('/editRide/{id}', [RideController::class, 'editRideView']);
Route::get('/showAllRides', [RideController::class, 'showAllRides']);
Route::post('/addRide', [RideController::class, 'addNewRide']);
Route::get('/delRide/{id}', [RideController::class, 'deleteRide']);
Route::post('/editRide', [RideController::class, 'updateRide']);







Route::get('employee_dashboard', [RideController::class, 'employee_dashboard']);

Route::post('login', [RideController::class, 'postAdminLogin']);
Route::get('/logout', [RideController::class, 'logout'])->name('logout');