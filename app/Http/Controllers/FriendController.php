<?php

namespace App\Http\Controllers;

use App\Friend;
use App\User;
use Auth;
use Session;
use App\Notification;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request)
    {
        //validate

        //añadir a database
        $friend = new Friend;
        $friend->user_id = Auth::user()->id;
        $friend->friend_id = $request->friend_id;

        $friend->save();
        Session::flash('success', 'Amigo añadido.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function show(Friend $friend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function edit(Friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Friend $friend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Friend::where('friend_id', $id)->delete();
        return back()->with('success', 'Ya no son amigos.');
    }

    public function rejectMatch($id){
        Notification::where('friend_id', $id)->delete();
        Friend::where('friend_id', $id)->delete();
        return back()->with('success', 'Rechazado!!.');
    }

    public function addFriend(Request $request, $id){
        $user = User::where('id', $id)->first();

        $notification = new Notification;
        $notification->title = "Tienes un match!";
        $notification->message = "Tienes un match! ";
        $notification->marker = 1;
        $notification->notificable = 1;
        $notification->user_id = $user->dog->id; 
        $notification->friend_id = Auth::user()->dog->id;
        $notification->user_name = $user->dog->name;
        $notification->friend_name = Auth::user()->dog->name;
        $notification->save();
        

        if(!$user){
            return redirect()
            ->route('dog.index')
            ->with('info', 'El usuario no existe.');
        }

        if(Auth::user()->hasFriendRequestPending($user) || $user->hasFriendRequestPending(Auth::user())){

            return redirect()->back()->with('info', 'Esperando a que acepten tu Match!');

        }

        if(Auth::user()->isFriendsWith($user)){
            return redirect()->back()->with('info', 'Ya son amigos!');
        }

        Auth::user()->addFriend($user);
     

        return redirect()->back()->with('info', 'Match! enviado.');
    }

    public function acceptFriend($id){
        $user = User::where('id', $id)->first();

        if(!$user){
            return redirect()
            ->route('dog.index')
            ->with('info', 'El usuario no existe.');
        }

        if(!Auth::user()->hasFriendRequestReceived($user)) {
            return redirect()->back();
        }

        Auth::user()->acceptFriendRequest($user);

        return redirect()->back()->with('info', 'Match! aceptado.');
    }
}