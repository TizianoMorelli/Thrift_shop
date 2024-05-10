<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;


class CreateAnnouncement extends Component
{
    use WithFileUploads;

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

    public $img;

    public function store()
    { 

        $this->validate();

        Announcement::create([

            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::user()->id,
            'img' => $this->img ? $this->img->store("public") : '/default-image.jpg',

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
