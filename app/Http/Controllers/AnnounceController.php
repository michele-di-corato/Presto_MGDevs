<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announces = Announce::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('announce.index', compact('announces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announce.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announce $announce)
    {
        return view('announce.edit', compact('announce'));
    }
}
