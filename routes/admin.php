<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MFYController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ApparatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\VacanacyController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\MfySectorController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\PublicReceptionController;
use App\Http\Controllers\GovernmentAdministrativeGuideController;
use App\Http\Controllers\SubscribedEmailController;

Route::get('adminpanel/', function () {
    return redirect('adminpanel/login');
});

Route::get('adminpanel/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('auth');

Route::middleware('auth')->prefix('adminpanel')->group(function () {

    Route::get('home', [PanelController::class, 'index'])->name('dashboard');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('/tables')->group(function () {

        Route::resource('/newss', PostController::class);

        Route::resource('/polls', PollController::class);

        Route::resource('/map', MapController::class);

        Route::resource('/reception', PublicReceptionController::class);

        Route::resource('/apparat', ApparatController::class);

        Route::resource('/vacancy', VacanacyController::class);

        Route::resource('/companytype', CompanyTypeController::class);

        Route::resource('/company', CompanyController::class);

        Route::resource('/mfy', MFYController::class);
        
        Route::resource('/mfysector', MfySectorController::class);

        Route::resource('/event/types', EventTypeController::class);

        Route::resource('/event', EventController::class);
        
        Route::resource('/question', QuestionController::class);

        Route::resource('/schedule', ScheduleController::class);

        Route::resource('/govguide', GovernmentAdministrativeGuideController::class);

        Route::get('/emails', [SubscribedEmailController::class, 'index'])->name('emails');
    });
    Route::get('profile', [PanelController::class, 'profile'])->name('profile');
});
