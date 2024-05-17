<?php

namespace App\Livewire;

use App\Jobs\ResizeImage;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    #[Validate('min:5', message:'Il testo deve contenere almeno 5 caratteri')]
    #[Validate('required', message: 'Il campo è obbligatorio.')]
    public $title;

    #[Validate('min:5', message:'Il testo deve contenere almeno 5 caratteri')]
    #[Validate('required', message: 'Il campo è obbligatorio.')]
    public $subtitle;

    #[Validate('min:5', message:'Il testo deve contenere almeno 5 caratteri')]
    #[Validate('required', message: 'Il campo è obbligatorio.')]
    public $body;

    #[Validate('required', message: 'Il campo è obbligatorio.')]
    public $price;

    #[Validate('required', message: 'Il campo è obbligatorio.')]
    public $category;

    #[Validate('max:6000', message:'Non entraaa!')]
    // #[Validate('image', message:'Deve essere un\'immagine!')]
    public $images = [];
    
    #[Validate('max:6000', message:'Non entraaa!')]
    // #[Validate('image', message:'Deve essere un\'immagine!')]
    public $temporary_images;


    public $img;


    public function updatedTemporaryImages()
    {
        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {

        $this->validate();

        if ($this->category == 'NULL') {
            session()->flash('message', 'Scegli categoria');
        } else {
            // dd($this->category);



            $announcement = Announcement::create([

                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'body' => $this->body,
                'price' => $this->price,
                'category_id' => $this->category,
                'user_id' => Auth::user()->id,

            ]);

            if (count($this->images)) {
                foreach ($this->images as $image) {
                    // $announcement->images()->create(['path' => $image->store('images', 'public')]); //!Non più utilizzato perchè adesso puntiamo a cartelle multiple in base all'id
                    $newFileName = "announcements/{$this->announcement->id}"; // in public crea una cartella "announcements" dove verranno create delle sottocartelle che conterranno le immagini divise per id dell'annuncio
                    $newImage =  $announcement->images()->create(['path' => $image->store($newFileName, 'public')]); //Salva l'immagine nella cartella public/announcmenets/'id dell'annuncio' e crea un record nella tabella immagini con il percorso dell'immagine stessa

                    dispatch(new ResizeImage($newImage, 300, 300)); //mette il job di resizing dell'immagine in coda ai processi di Laravel per farla eseguire in background 
                }
            }

            File::deleteDirectory(storage_path('app/livewire-tmp')); //cancella i file temporanei creati da livewire durante il caricamento delle immagini

            $this->reset();

            session()->flash('message', 'Articolo creato correttamente');
        }
    }


    public function render()
    {
        $categories = Category::all();

        return view('livewire.create-announcement', compact('categories'));
    }
}
