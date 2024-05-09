<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/annoucement/create', [AnnouncementController::class, 'create'])->name('annoucement.create')->middleware('auth');