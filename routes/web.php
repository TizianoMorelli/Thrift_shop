<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;

// PublicController 
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/announcement/search', [AnnouncementController::class, 'searchAnnouncements'])->name('announcement.search');

// AnnouncementController 
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create')->middleware('auth');

Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('/announcement/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');

// CategoryController 
Route::get('category/index/{category}', [CategoryController::class, 'index'])->name('category.index');

// RevisorController
Route::get('revisor/home', [RevisorController::class, 'index'])->name('revisor.index')->middleware('isRevisor');

Route::patch('accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');

Route::patch('rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');

Route::get('revisor/become', [RevisorController::class,'becomeRevisor'])->name('revisor.become')->middleware('auth');

Route::post('revisor/become', [RevisorController::class, 'sendEmailRev'])->name('revisor.mailSend');