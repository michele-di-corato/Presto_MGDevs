<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditAnnounce extends Component
{
    public $announce;

    public $name;
    public $price;
    public $description;
    public $category_id;
    public function editAnnounce()
    {
        $this->announce->update([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id
        ]);
        if ($this->announce->is_accepted == 0) {
            $this->announce->update([
                'is_accepted' => null
            ]);
        }
        return redirect(route('show_announces'))->with('confirm', 'Annuncio modificato correttamente');
    }

    public function mount()
    {
        $this->name = $this->announce->name;
        $this->price = $this->announce->price;
        $this->description = $this->announce->description;
        $this->category_id = $this->announce->category_id;
    }
    public function render()
    {
        return view('livewire.edit-announce');
    }
}
