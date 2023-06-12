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
        $announces = Announce::where('is_accepted', true)->orderBy('created_at', 'desc')->limit(4)->get();
        return view('home', compact('announces'));
    }
    public function categoryShow(Category $category)
    {
        $announces = Announce::where('category_id', $category->id)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('announce.perCategory', compact('category', 'announces'));
    }

    public function showDetail(Announce $announce, $id)
    {
        $announce = Announce::findOrFail($id);
        return view('announce.detail', compact('announce'));
    }
    public function profile()
    {
        $index = 0;
        $announces = Announce::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $approved_announces = Announce::where('user_id', Auth::id())->where('is_accepted', true)->limit(3)->get();
        $pending_announces = Announce::where('user_id', Auth::id())->where('is_accepted', null)->limit(3)->get();
        $rejected_announces = Announce::where('user_id', Auth::id())->where('is_accepted', false)->limit(3)->get();
        return view('profile', compact('approved_announces', 'pending_announces', 'rejected_announces', 'announces', 'index'));
    }
    public function searchAnnounce(Request $request)
    {
        $announces = Announce::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view('announce.index', compact('announces'));
    }
}
