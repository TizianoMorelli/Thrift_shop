<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;

class IndexHome extends Component
{
    public function render()
    {
        // $announcements = Announcement::all();

        // $announcements = DB::table('announcements')->max('updated_at');

        // $announcements = Announcement::select() -> orderByDesc('updated_at')->get();
        $announcements = Announcement::orderBy('updated_at','desc')->take(6)->get();

        $categories = Category::all();
        
        return view('livewire.index-home', compact('announcements', 'categories'));
    }
}
