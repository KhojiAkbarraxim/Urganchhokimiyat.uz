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
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\VacanacyController;
use App\Http\Controllers\MfySectorController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\PostCalendarController;
use App\Http\Controllers\PublicReceptionController;
use App\Http\Controllers\GovernmentAdministrativeGuideController;

Route::get('/mfys', [MFYController::class, 'ApiIndex']);

Route::get('/apparats',[ApparatController::class, 'ApiIndex']);

Route::get('/companies',[CompanyController::class, 'ApiIndex']);

Route::get('/company/types',[CompanyTypeController::class, 'ApiIndex']);

Route::get('/news/{date?}', [PostController::class, 'apiindex']);

Route::get('/new/{post?}', [PostController::class, 'eachindex']);

Route::get('/events/{id?}', [EventController::class, 'ApiIndex']);

Route::get('/questions', [QuestionController::class, 'ApiIndex']);

Route::get('/vacancies', [VacanacyController::class, 'ApiIndex']);

Route::get('/schedules', [ScheduleController::class, 'ApiIndex']);

Route::get('/obj/locations/{id?}',[MapController::class, 'ApiIndex']);

Route::get('/mfys/sectors', [MfySectorController::class, 'ApiIndex']);

Route::get('/calendar', [PostCalendarController::class,'GetYearMonth']);

Route::get('/polls',[PollController::class, 'ApiIndex'])->name('allpoll');

Route::post('/voting/answer/{answer_id}/pollId/{poll_id}',[PollController::class, 'vote']);

Route::get('/receptions/{id?}', [PublicReceptionController::class, 'ApiIndex']);

Route::get('/govguides', [GovernmentAdministrativeGuideController::class, 'ApiIndex']);
