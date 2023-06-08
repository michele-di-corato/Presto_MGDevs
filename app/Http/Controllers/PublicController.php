<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home()
    {
        $announces = Announce::orderBy('created_at', 'desc')->limit(4)->get();
        return view('home', compact('announces'));
    }
    public function categoryShow(Category $category)
    {
        return view('announce.perCategory', compact('category'));
    }

    public function showDetail(Announce $announce, $id)
    {
        $announce = Announce::findOrFail($id);
        return view('announce.detail', compact('announce'));
    }

    public function profile()
    {
        $announces = Announce::where('user_id', Auth::id())->get();
        return view('profile', compact('announces'));
    }
}
