<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announce_to_check = Announce::where('is_accepted', null)->first();

        return view('revisor.index', compact('announce_to_check'));
    }
}
