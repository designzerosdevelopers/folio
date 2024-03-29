<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteviewController;

Route::get('/choose-live-folio-template', [GuestController::class, 'index'])->name('folio-template-list');
Route::get('/profile/{temp_name}', [GuestController::class, 'create'])->name('template');
Route::middleware(['web','auth'])->group(function () {
Route::resource('skill', SkillController::class);
Route::get('/image-swipe/{image_id}', [PortfolioController::class, 'swipe'])->name('image-swipe');
Route::delete('image-delete/{image_id}', [PortfolioController::class, 'image_delete'])->name('image-delete');
Route::resource('portfolio', PortfolioController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('service', ServiceController::class);
Route::resource('language', LanguageController::class);
});



Route::get('/', function () {
    return view('client-side.index');
});

Route::get('/choice', function () {
    return view('client-side.choice');
});


Route::get('/choose-cv-template', function () {
    return view('client-side.cv-template-list');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'PicUpdate'])->name('upload.image');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('brad', function () {
    return view('portfolio.brad.index');
})->name('brad');

Route::get('marlin', function () {
    return view('portfolio.marlin.index');
})->name('marlin.index');

Route::get('super', function () {
    return view('portfolio.super.index');
})->name('super.index');

Route::get('coffie', function () {
    return view('portfolio.coffie.index');
});

Route::get('folio', function () {
    return view('portfolio.folio.index');
});

Route::get('iportfolio', function () {
    return view('portfolio.iportfolio.index');
});

Route::get('kross', function () {
    return view('portfolio.kross.index');
});

Route::get('master', function () {
    return view('portfolio.master.index');
});

Route::get('myresume', function () {
    return view('portfolio.myresume.index');
});

Route::get('mystery', function () {
    return view('portfolio.mystery.index');
});

Route::get('phantom', function () {
    return view('portfolio.phantom.index');
});



require __DIR__ . '/auth.php';

Route::get('{user_name}', [SiteviewController::class, 'index'])->name('siteview');