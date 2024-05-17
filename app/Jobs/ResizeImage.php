<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    private $w;
    private $h;
    private $fileName;
    private $path;
    
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath); //dirname restituisce il nome di una cartella dato un percorso
        $this->fileName = basename($filePath); //basename restituisce il nome di un file
        $this->w = $w;
        $this->h = $h;
    }
    
    /**
    * Execute the job.
    */
    public function handle(): void
    {
        $w = $this->w; //passo all'istanza le dimensioni dell'immagine
        $h = $this->h;
        // $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName; //percorso sorgente dell'immagine in storage/public/app
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName; //percorso sorgente dell'immagine in storage/public/app
        // $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName; //percorso di destinazione dell'immagine croppata
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName; //percorso di destinazione dell'immagine croppata
        
        $croppedImage = Image::load($srcPath)
                        // ->crop(Manipulations::CROP_CENTER, $w, $h) //! Non più funzionante
                        // ->crop($w, $h, CropPosition::Center) //!Diverso dal video - Lancia la funzione di cropping con le dimensioni e la posizione data
                        ->fit(Fit::Crop,$w,$h)
                        ->save($destPath); //salva l'immagine nel percorso di destinazione
    }
}
