<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Models\Image;
use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnounce extends Component
{
    use WithFileUploads;

    public $name;
    public $price;
    public $description;
    public $category_id;
    public $temporary_images = [];
    public $images = [];
    public $announce;

    protected $rules = [
        'name' => 'required|min:5',
        'description' => 'required|min:10',
        'price' => 'required',
        'category_id' => 'required',
        'temporary_images.*' => 'required|image|max:1024',
        'images.*' => 'required|image|max:1024'
    ];

    protected $messages = [
        'name.required' => 'Il nome del prodotto è obbligatorio',
        'name.min' => 'Il nome deve essere di almeno 5 caratteri',
        'description.required' => 'La descrizione è obbligatoria',
        'description.min' => 'La descrizione deve essere di almeno 10 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'category_id.required' => 'E\' obbligatorio specificare una categoria',
        'images.*.image' => 'Il file dev\' essere un\'immagine',
        'images.*.max' => 'Le dimensioni dell\'immagine non devono superare 1MB',
        'temporary_images.*.image' => 'Il file dev\'essere un immagine',
        'temporary_images.*.max' => 'Le dimensioni dell\' immagine non devono superare 1MB',
    ];

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
        if ($this->images) {
            foreach ($this->images as $image) {
                $newFileName = "announces/{$this->announce->id}";
                $newImage =  $this->announce->images()->create(['path' => $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([new ResizeImage($newImage->path, 300, 300), new GoogleVisionSafeSearch($newImage->id), new GoogleVisionLabelImage($newImage->id)])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        return redirect(route('show_announces'))->with('confirm', 'Annuncio creato correttamente.');
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
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
