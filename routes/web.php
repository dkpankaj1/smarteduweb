<?php

use App\Http\Controllers\AboutUsMenuController;
use App\Http\Controllers\AcademiaMenuController;
use App\Http\Controllers\HomeMenuController;
use App\Http\Controllers\StudentLifeMenuController;
use App\Http\Controllers\NotificationMenuController;
use App\Http\Controllers\GalleryMenuController;
use App\Http\Controllers\ContactUsMenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeMenuController::class, 'index'])->name('home');

// About Us Routes
Route::prefix('about')->name('about.')->group(function () {
    Route::get('our-history', [AboutUsMenuController::class, 'ourHistory'])->name('our-history');
    Route::get('school', [AboutUsMenuController::class, 'aboutSchool'])->name('school');
    Route::get('vision-mission', [AboutUsMenuController::class, 'visionMission'])->name('vision-mission');
    Route::get('leadership-team', [AboutUsMenuController::class, 'leadershipTeam'])->name('leadership-team');
    Route::get('director-desk', [AboutUsMenuController::class, 'directorDesk'])->name('director-desk');
    Route::get('principal-desk', [AboutUsMenuController::class, 'principalDesk'])->name('principal-desk');
    Route::get('co-principal-desk', [AboutUsMenuController::class, 'coPrincipalDesk'])->name('co-principal-desk');
    Route::get('faculty-directory', [AboutUsMenuController::class, 'facultyDirectory'])->name('faculty-directory');
    Route::get('faculty-detail', [AboutUsMenuController::class, 'facultyDetail'])->name('faculty-detail');
});

// Academia Routes
Route::prefix('academia')->name('academia.')->group(function () {
    Route::get('programs-offered', [AcademiaMenuController::class, 'programOffered'])->name('programs-offered');
    Route::get('curriculum', [AcademiaMenuController::class, 'curriculum'])->name('curriculum');
    Route::get('academic-calendar', [AcademiaMenuController::class, 'academicCalendar'])->name('academic-calendar');
    Route::get('facilities', [AcademiaMenuController::class, 'facilities'])->name('facilities');
    Route::get('admission-process', [AcademiaMenuController::class, 'admissionProcess'])->name('admission-process');
    Route::get('fee-structure', [AcademiaMenuController::class, 'feeStructure'])->name('fee-structure');
    Route::get('scholarships', [AcademiaMenuController::class, 'scholarships'])->name('scholarships');
    Route::get('application-form', [AcademiaMenuController::class, 'applicationForm'])->name('application-form');
});

// Student Life Routes
Route::prefix('student-life')->name('student.')->group(function () {
    Route::get('guidelines', [StudentLifeMenuController::class, 'studentGuideLines'])->name('guidelines');
    Route::get('campus-activities', [StudentLifeMenuController::class, 'campusActivities'])->name('campus-activities');
    Route::get('student-council', [StudentLifeMenuController::class, 'studentCouncil'])->name('student-council');
    Route::get('clubs-organizations', [StudentLifeMenuController::class, 'clubsOrganization'])->name('clubs-organizations');
    Route::get('housing', [StudentLifeMenuController::class, 'housing'])->name('housing');
    Route::get('career-services', [StudentLifeMenuController::class, 'careerServices'])->name('career-services');
});

// Notifications Routes
Route::prefix('notifications')->name('notifications.')->group(function () {
    Route::get('notice-board', [NotificationMenuController::class, 'noticeBoard'])->name('notice-board');
    Route::get('notice-detail', [NotificationMenuController::class, 'noticeDetail'])->name('notice-detail');
    Route::get('events', [NotificationMenuController::class, 'eventNotice'])->name('events');
    Route::get('event-detail', [NotificationMenuController::class, 'eventDetail'])->name('event-detail');
});

// Gallery Route
Route::prefix('gallery')->name('gallery.')->group(function () {
    Route::get('/', [GalleryMenuController::class, 'index'])->name('index');
});

// Contact Us Routes
Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactUsMenuController::class, 'create'])->name('create');
    Route::get('store', [ContactUsMenuController::class, 'store'])->name('store');
});