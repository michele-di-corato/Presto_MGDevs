<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announce;
use App\Mail\RevisorMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('isRevisor')->except('becomeRevisor', 'makeRevisor');
    }

    public function index()
    {
        $verified_announces = Announce::whereNotNull('is_accepted')->get();
        $announce_to_check = Announce::where('is_accepted', null)->first();
        $announces_queue = Announce::where('is_accepted', null)->skip(1)->limit(6)->get();
        $revisioned_announces = Announce::whereNotNull('is_accepted')->orderBy('created_at', 'desc')->limit(6)->get();
        return view('revisor.index', compact('announce_to_check', 'verified_announces', 'announces_queue', 'revisioned_announces'));
    }

    public function accept(Announce $announce)
    {
        $announce->setAccepted(true);
        return redirect()->back()->with('confirm', 'Hai accettato l\'annuncio');
    }

    public function reject(Announce $announce)
    {
        $announce->setAccepted(false);
        return redirect()->back()->with('confirm', 'Hai rifiutato l\'annuncio');
    }

    public function undoRevision(Announce $announce)
    {
        $announce->setAccepted(null);
        return redirect()->back()->with('confirm', 'Hai annullato la revisione');
    }

    public function undoAction(Announce $announce)
    {
        $announce = Announce::whereNotNull('is_accepted')->orderBy('created_at', 'desc')->first();
        $announce->setAccepted(null);
        return redirect()->back()->with('confirm', 'Hai annullato l\'ultima azione');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new RevisorMail(Auth::user()));
        return redirect()->back()->with('confirm', 'La candidatura è stata inviata con successo');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:makeUserRevisor', ['email' => $user->email]);
        return redirect('/')->with('confirm', 'L\'utente è diventato Revisore');
    }

    public function logRevisions()
    {
        $revisioned_announces = Announce::whereNotNull('is_accepted')->orderBy('created_at', 'desc')->paginate(12);
        return view('revisor.log', compact('revisioned_announces'));
    }
}
