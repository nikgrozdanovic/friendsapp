<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invites;
use App\FriendList;

class InviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Invites $invite, Request $request)
    {

        $user = auth()->user();

        FriendList::create([
            'user_id' => $user->id,
            'friends_id' => $invite->user_id
        ]);

        FriendList::create([
            'user_id' => $invite->user_id,
            'friends_id' => $user->id
        ]);

        $invite->delete();

        flash('Request accepted succesfully.')->important()->success();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invites $invite)
    {
        $invite->delete();

        flash('Invitation declined.')->important()->success();

        return redirect()->back();
    }
}
