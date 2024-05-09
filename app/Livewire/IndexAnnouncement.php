<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class IndexAnnouncement extends Component
{
    public function render()
    {
        $announcements= Announcement::all();
        return view('livewire.index-announcement', compact('announcements'));
    }
}
