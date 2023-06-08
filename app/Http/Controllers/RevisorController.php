<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('isRevisor');
    }


    public function index(){
        $announce_to_check = Announce::where('is_accepted', null)->first();

        return view('revisor.index', compact('announce_to_check'));

    }

    public function accept(Announce $announce){
        $announce->setAccepted(true);

        return redirect()->back()->with('confirm', 'Hai accettato l\'annuncio');
    }

    public function reject(Announce $announce){
        $announce->setAccepted(false);
        return redirect()->back()->with('confirm', 'Hai rifiutato l\'annuncio');

    }
}
