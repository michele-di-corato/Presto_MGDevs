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

    public function createAnnounce(){
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
