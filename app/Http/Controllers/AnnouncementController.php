<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){

        return view('announcement.create');
    }

    public function index(){

        return view('announcement.index');
    }

    public function show(Announcement $announcement){

        return view('announcement.show', compact('announcement'));
    }

    public function searchAnnouncements(Request $request) {
        $announcements = Announcement::search($request->searched)->get();
        //  dd($announcements);
        // $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announcement.search', compact('announcements'));        
    }
}
