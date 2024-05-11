<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [PublicController::class, 'home'])->name('home');

// AnnouncementController 
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create')->middleware('auth');

Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('/announcement/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');

// CategoryController 
Route::get('category/index/{category}', [CategoryController::class, 'index'])->name('category.index');

