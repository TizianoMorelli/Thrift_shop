<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home() {

        $announcements = Announcement::where('is_accepted', true)->take(4)->get()->sortByDesc('created_at');

        return view('welcome', compact('announcements'));
    }
}
