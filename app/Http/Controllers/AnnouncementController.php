<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){

        return view('announcement.create');
    }

    public function index(){

        return view('announcement.index');
    }
}
