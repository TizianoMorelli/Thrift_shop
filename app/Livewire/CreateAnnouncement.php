<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{
    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:5')]
    public $subtitle;
    #[Validate('required|min:5')]
    public $body;
    #[Validate('required')]
    public $price;
    #[Validate('required')]
    public $category;

    public function store()
    { 

        $this->validate();

        Announcement::create([

            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->category,

        ]);


        $this->reset();

        session()->flash('message', 'Articolo creato correttamente');
    }


    public function render()
    {
        $categories = Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }
}
