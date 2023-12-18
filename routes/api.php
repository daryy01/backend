<?php

use App\Http\Controllers\API\ArtistController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\API\ClassesController;
use App\Http\Controllers\API\ClassRegistrationController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\EventAttendanceController;
use App\Http\Controllers\API\ArtistsExhibitionController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LetterController;
use App\Http\Controllers\API\OrganizerController;
use App\Http\Controllers\API\InstructorController;
use App\Http\Controllers\Api\ProfileController;
use App\Models\EventAttendance;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Message API's
Route::controller(MessageController::class)->group(function () {
    Route::get('/message',                 'index');
    Route::get('/message/{id}',            'show');
    Route::post('/message',                'store');
    Route::put('/message/{id}',            'update');
    Route::delete('/message/{id}',         'destroy');
});

Route::controller(LetterController::class)->group(function () {
    Route::get('/letter',                   'index');
    Route::get('/letter/{id}',              'show');
    Route::put('/letter/{id}',              'update');
    Route::post('/letter',                  'store');
    Route::delete('/letter/{id}',           'destroy');
    
});

//Public API's
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/user',  [UserController::class, 'store'])->name('user.store');


//User Selection
Route::get('/user/selection',[UserController::class, 'selection']);

//Private API's
Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::get('/logout',                  [AuthController::class, 'logout']);

    //Admin API's
    Route::controller(CarouselItemsController::class)->group(function () {
        Route::get('/carousel',             'index');
        Route::get('/carousel/{id}',        'show');
        Route::post('/carousel',            'store');
        Route::put('/carousel/{id}',        'update');
        Route::delete('/carousel/{id}',     'destroy');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/user',                 'index');
        Route::get('/user/{id}',            'show');
        Route::put('/user/{id}',            'update')->name('user.update');
        Route::put('/user/email/{id}',      'email')->name('user.email');
        Route::put('/user/password/{id}',   'password')->name('user.password');
        Route::put('/user/image/{id}',      'image')->name('user.image');
        Route::delete('/user/{id}',         'destroy');
    });
    Route::controller(ArtistController::class)->group(function () {
        Route::get('/artist',       'index');
        Route::post('/artist',      'store');
        Route::get('/artist/{id}',  'show');
    });
    Route::controller(EventController::class)->group(function () {
        Route::get('/event',        'index');
        Route::post('/event',       'store');
        Route::get('/event/{id}',   'show');
    });
    Route::controller(OrganizerController::class)->group(function () {
        Route::get('/organizer',    'index');
        Route::post('/organizer',   'store');
    });
    Route::controller(InstructorController::class)->group(function () {
        Route::get('/instructor',    'index');
        Route::post('/instructor',   'store');
    });
    Route::controller(ClassesController::class)->group(function () {
        Route::get('/classes',      'index');
        Route::post('/classes',     'store');
    });
    Route::controller(ClassRegistrationController::class)->group(function () {
        Route::post('/classreg', 'store');
    });
    Route::controller(EventAttendanceController::class)->group(function () {
        Route::post('/eventatt', 'store');
    });
    Route::controller(ArtistsExhibitionController::class)->group(function () {
        Route::post('/eventexhi', 'store');
    });
    


    //User Specific API's
    Route::get('/profile/show',          [ProfileController::class, 'show']);
    Route::put('/profile/image',          [ProfileController::class, 'image'])->name('profile.image');
});









