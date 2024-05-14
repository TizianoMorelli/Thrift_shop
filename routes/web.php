<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('home');

// AnnouncementController 
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create')->middleware('auth');

Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('/announcement/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');

// CategoryController 
Route::get('category/index/{category}', [CategoryController::class, 'index'])->name('category.index');

// RevisorController
Route::get('revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

Route::patch('accetta/annuncio/{announcement_to_check}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');

Route::patch('rifiuta/annuncio/{announcement_to_check}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');



