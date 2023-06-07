<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteAnnounce extends Component
{
 public $announce;
    
    public function render()
    {
        return view('livewire.delete-announce');
    }

    public function destroy(){
        $this->announce->delete();

        return redirect(route('show_announces'))->with('confirm','Annuncio eliminato con successo');
    }
}
