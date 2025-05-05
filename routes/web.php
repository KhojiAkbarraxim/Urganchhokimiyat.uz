<?php

use App\Mail\NewPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubscribedEmailController;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [PageController::class, 'index'])->name('home');

Route::get('/news', [PageController::class, 'news'],)->name('news');


Route::get('/xokimApparat', [PageController::class, 'xokimApparat'])->name('xokimApparat');

Route::get('/sayorQabul', [PageController::class, 'sayorQabul'])->name('sayorQabul');

Route::get('/greenArea', [PageController::class, 'greenArea'])->name('greenArea');

Route::get('/boshqaruvApparat', [PageController::class, 'boshqaruvApparat'])->name('boshqaruvApparat');

Route::get('/kunTartibi', [PageController::class, 'kunTartibi'])->name('kunTartibi');

Route::get('/xokimTadbir', [PageController::class, 'xokimTadbir'])->name('xokimTadbir');

Route::get('/boshIsh', [PageController::class, 'boshIsh'])->name('boshIsh');

Route::get('/tenderElon', [PageController::class, 'tenderElon'])->name('tenderElon');

Route::get('/tumanXaqida', [PageController::class, 'tumanXaqida'])->name('tumanXaqida');

Route::get('/tumanTashkilot', [PageController::class, 'tumanTashkilot'])->name('tumanTashkilot');

Route::get('/map', [PageController::class, 'map'])->name('map');

Route::get('/rasmiyMaruza', [PageController::class, 'rasmiyMaruza'])->name('rasmiyMaruza');

Route::get('/choraTadbir', [PageController::class, 'choraTadbir'])->name('choraTadbir');

Route::get('/savolJavob', [PageController::class, 'savolJavob']);

Route::get('/xokimIsh', [PageController::class, 'xokimIsh'])->name('xokimIsh');

Route::get('/mahallaYigini', [PageController::class, 'mahallaYigini'])->name('mahallaYigini');  

Route::get('/tumanxokimlig', [PageController::class, 'tumanXokim']);

Route::get('/news/{id}', [PageController::class, 'page']);

Route::post('/subscription',[SubscribedEmailController::class, 'store'])->name('subscription');

include('admin.php');