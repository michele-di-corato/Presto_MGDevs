<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Announce;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditAnnounce extends Component
{
    use WithFileUploads;

    public $announce;
    public $name;
    public $price;
    public $description;
    public $category_id;
    public $temporary_images = [];
    public $images = [];
    public $old_images = [];

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

    public function editAnnounce()
    {
        $this->validate();
        $this->announce->update([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id
        ]);
        if ($this->announce->is_accepted == false) {
            $this->announce->setAccepted(null);
        }
        if ($this->images) {
            foreach ($this->images as $image) {
                $newFileName = "announces/{$this->announce->id}";
                $newImage =  $this->announce->images()->create(['path' => $image->store($newFileName, 'public')]);
                dispatch(new ResizeImage($newImage->path, 300, 300));
            }
        }

        File::deleteDirectory(storage_path('/app/livewire-tmp'));

        return redirect(route('show_announces'))->with('confirm', 'Annuncio modificato correttamente');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function mount()
    {
        $this->name = $this->announce->name;
        $this->price = $this->announce->price;
        $this->description = $this->announce->description;
        $this->category_id = $this->announce->category_id;
        $this->old_images = $this->announce->images()->get();
    }
    public function render()
    {
        return view('livewire.edit-announce');
    }
}
