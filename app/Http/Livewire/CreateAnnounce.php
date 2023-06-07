<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAnnounce extends Component
{
    public $name;
    public $price;
    public $description;
    public $category_id;


    protected $rules = [
    'name' => 'required|min:5',
    'description' => 'required|min:10',
    'price' => 'required',


    ];

    protected $messages = [
        'name.required' => 'Il nome del prodotto è obbligatorio',
        'name.min' => 'Il nome deve essere di almeno 5 caratteri',
        'description.required' => 'La descrizione è obbligatoria',
        'description.min' => 'La descrizione deve essere di almeno 10 caratteri',
        'price.required' => 'Il prezzo è obbligatorio'
    ];

    public function createAnnounce(){
        $this->validate();
        $announce= Announce::create([
            'name'=> $this->name,
            'price'=>$this->price,
            'description'=>$this->description,
            'user_id'=>Auth::id(),
            'category_id'=>$this->category_id
         ]);



        return redirect(route('show_announces'))->with('confirm','Annuncio creato correttamente.');
    }
    public function render()
    {
        return view('livewire.create-announce' , ['categories'=>Category::all()]);
    }
}
