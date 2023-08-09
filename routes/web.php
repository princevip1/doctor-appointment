<?php

use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsGatewayController;
use App\Http\Controllers\SpecialityController;
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
Route::get('/', function () {
    return view('welcome');
})->name('unauthorize');

Route::get('/send-message', function () {
    return response()->json([
        'success' => true,
        'message' => "Thank you for using our application",
        'data' => []
    ]);
})->name('sendMessage');

Auth::routes();
// logout route
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('welcome');
})->name('logout');

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// user routes
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctor');
Route::get('/doctor/{id}', [HomeController::class, 'doctor_details'])->name('doctor_details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/congratulation', [HomeController::class, 'congratulation'])->name('congratulation');

// appointment routes
Route::post('/appointment', [AppoinmentController::class, 'store'])->name('appointment.store');
Route::get('/appointment/otp', [AppoinmentController::class, 'otp'])->name('appointment.otp');
Route::post('/appointment/otp', [AppoinmentController::class, 'otp_check'])->name('appointment.otp_check');
Route::get('/appointment/{did}', [AppoinmentController::class, 'appointment'])->name('appointment');




// admin routes group
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'admin'])->name("admin.dashboard");
    Route::group(
        ['prefix' => 'speciality', 'as' => 'speciality.'],
        function () {
            Route::get('/', [SpecialityController::class, 'index'])->name('list');
            Route::post('/store', [SpecialityController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [SpecialityController::class, 'delete'])->name('delete');
        }
    );
    Route::group(
        ['prefix' => 'division', 'as' => 'division.'],
        function () {
            Route::get('/', [DivisionController::class, 'index'])->name('list');
            Route::post('/store', [DivisionController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [DivisionController::class, 'delete'])->name('delete');
        }
    );
    Route::group(
        ['prefix' => 'doctor', 'as' => 'doctor.'],
        function () {
            Route::get('/', [DoctorController::class, 'index'])->name('list');
            Route::post('/store', [DoctorController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [DoctorController::class, 'delete'])->name('delete');
        }
    );
    Route::group(
        ['prefix' => 'smsGateway', 'as' => 'smsGateway.'],
        function () {
            Route::get('/', [SmsGatewayController::class, 'index'])->name('list');
            Route::post('/store', [SmsGatewayController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [SmsGatewayController::class, 'delete'])->name('delete');
        }
    );



    //TODO: smtp
    // Route::group(
    //     ['prefix' => 'smtp', 'as' => 'AdminSmtp.'],
    //     function () {
    //         Route::get('/', [AdminSmtpController::class, 'index'])->name('list');
    //     }
    // );



});
