<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAnnounce extends Component
{
    use WithFileUploads;

    public $name;
    public $price;
    public $description;
    public $category_id;
    // public $temp_images = [];
    public $images = [];
    public $announce;

    protected $rules = [
        'name' => 'required|min:5',
        'description' => 'required|min:10',
        'price' => 'required',
        'category_id' => 'required',
        // 'temp_images.*' => 'image|max:1024',
        'images.*' => 'image|max:1024'
    ];

    protected $messages = [
        'name.required' => 'Il nome del prodotto è obbligatorio',
        'name.min' => 'Il nome deve essere di almeno 5 caratteri',
        'description.required' => 'La descrizione è obbligatoria',
        'description.min' => 'La descrizione deve essere di almeno 10 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'category_id.required' => 'E\' obbligatorio specificare una categoria',
        'images.*.image' => 'Il file dev\' essere un immagine',
        'images.*.max' => 'Le dimensioni dell\' immagine non devono superare i 1MB',
        // 'temp_images.*.image' => 'Il file dev\' essere un immagine',
        // 'temp_images.*.max' => 'Le dimensioni dell\' immagine non devono superare i 1MB',
    ];

    // public function updatedTemporaryImages()
    // {
    //     dd($this->temp_images);
    //     if ($this->validate([
    //         'temp_images.*' => 'image|max:1024',
    //     ])) {
    //         foreach ($this->temp_images as $image) {
    //             $this->images[] = $image;
    //         }
    //     }
    // }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function createAnnounce()
    {
        $this->validate();
        $this->announce = Announce::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::id(),
            'category_id' => $this->category_id
        ]);

        foreach ($this->images as $image) {
            $this->announce->images()->create(['path' => $image->store('public/media')]);
        }

        return redirect(route('show_announces'))->with('confirm', 'Annuncio creato correttamente.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.create-announce', ['categories' => Category::all()]);
    }
}
