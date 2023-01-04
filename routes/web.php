<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RideController;
use App\Http\Controllers\chatController;

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
Route::get('/',[RideController::class, 'indexPage'] );
Route::get('/login',[RideController::class, 'loginPage'] );
Route::get('/register',[RideController::class, 'registerPage'] );
Route::post('/register',[RideController::class, 'postUserRegistration'] );

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
Route::post('/bookRideWithUser/{ride_id}/{sender_id}',[RideController::class, 'bookNewRide'] );



//Chat crud
Route::post('/startChat', [chatController::class, 'addMessage']);
Route::get('/addChat', [chatController::class, 'getAllChatsOfLoggedInUser']);
Route::get('/getChatWithReceiverId/{id}', [chatController::class, 'getChatWithId']);
Route::get('/chatWithNewUser/{rideId}/{userId}', [chatController::class, 'chatWithANewUserAndExistingUser']);
//Route::get('/getChatWithReceiverId/{id}', [chatController::class, 'getChatWithId']);

///getChatWithReceiverId/
//
Route::get('/allNotifications', [chatController::class, 'getAllNotifications']);
Route::get('/delNotifications/{id}', [chatController::class, 'deleteNotification']);
Route::get('employee_dashboard', [RideController::class, 'employee_dashboard']);

Route::post('login', [RideController::class, 'postAdminLogin']);
Route::post('/logout', [RideController::class, 'logout'])->name('logout');

//Login with google
//Auth::routes();
Route::get('/redirect', [RideController::class, 'LoginWithGoogle']);
Route::get('/callback', [RideController::class, 'callback']);


Route::get('/allUsers',[RideController::class,'getAllUsers']);
Route::post('/editNotificationStatus/{id}',[RideController::class,'updateNotificationStatus']);
Route::get('/delUser/{id}', [RideController::class, 'deleteUser']);
