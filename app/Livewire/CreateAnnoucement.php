<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateAnnoucement extends Component
{
    #[Validate('required|min:5')] 
    public $title;
    #[Validate('required|min:5')] 
    public $subtitle;
    #[Validate('required|min:5')] 
    public $body;
    #[Validate('required')] 
    public $price;

    public function store(){

        $this->validate();

        Announcement::create([

            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'price' => $this->price,

        ]);


        $this->reset();

        session()->flash('message', 'Articolo creato correttamente');


    }


    public function render()
    {
        return view('livewire.create-annoucement');
    }
}
