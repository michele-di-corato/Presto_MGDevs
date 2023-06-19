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

    public function destroy()
    {
        $this->announce->images()->delete();
        $this->announce->delete();
        return redirect(route('show_profile'))->with('confirm', 'Annuncio eliminato con successo');
    }
}
