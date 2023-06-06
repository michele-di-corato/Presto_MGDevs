<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $announces = Announce::orderBy('created_at', 'desc')->limit(6)->get();
        return view('home', compact('announces'));
    }
}
