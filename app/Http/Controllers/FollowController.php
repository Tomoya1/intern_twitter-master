<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{

    public function show($urlName)
    {
        $user = User::whereUrlName($urlName)->first();


        return view('user.following', ['user' => $user]);

    }

    public function create($urlName)
    {
        $user = \Auth::user();

        $followee = User::whereUrlName($urlName)->first();

        $user->following()->attach($followee->id);

        return back();

    }

    public function delete($urlName)
    {
        $user = \Auth::user();
        $followee = User::whereUrlName($urlName)->first();

        $user->following()->detach($followee->id);

        return back();
    }



//    public function follower(){
//        $user = \Auth::user();
//
//        //return view('home',['user' => $user, 'tweets' => $tweets]);
//
//
//        return view('home',['user' => '$user']);
//    }




}
