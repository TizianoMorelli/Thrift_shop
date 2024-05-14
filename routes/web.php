<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;

// PublicController 
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/announcement/search', [AnnouncementController::class, 'searchAnnouncements'])->name('announcement.search');

// AnnouncementController 
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create')->middleware('auth');

Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('/announcement/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');

// CategoryController 
Route::get('category/index/{category}', [CategoryController::class, 'index'])->name('category.index');

