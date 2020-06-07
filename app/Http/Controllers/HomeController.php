<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invites;
use App\FriendList;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $invites = Invites::where('email', '=', $user->email)->get();
        $friendlist = FriendList::where('user_id', $user->id)->get();

        return view('home', [
            'invites' => $invites,
            'friendlist' => $friendlist
        ]);
    }
}
