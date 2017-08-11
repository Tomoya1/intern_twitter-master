<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


//    public function index()
//    {
//        $user = \Auth::user();
//        $tweets = $user->tweets()->latest()->get();
//
//        return view('home',['user' => $user, 'tweets' => $tweets]);
//    }





    public function profile()
    {

       $user = \Auth::user();

     //Auth::user
        return view('settings.profile', ['user' => $user]);

    }


    public function account()
    {
        $user = Auth::user();

        return view('settings.account', ['user' => $user]);

    }

//
//    public function create(Request $request){
//
//        $user = Auth::user()->create([
//
//            'display_name' => $request->input('display_name'),
//            'description' => $request->input('description'),
//            'avatar' => $request->input('avatar'),
//
//        ]);
//
//        return redirect('/profile');
//
//
//    }
//
//
//
//    public function edit($id)
//    {
//
//        $user = Auth::user()->where(`id`, `=`, $id)->first();
//
//        return view('user.edit', ['user' => $user]);
//
//
//    }




    public function updateProfile(Request $request)
    {
        Auth::user()
            ->update([
                'display_name' => $request->input('display_name'),
                'description' => $request->input('description'),
                'avatar' => $request->file('avatar'),
            ]);

        return redirect('/profile');

    }

    public function updateAccount(Request $request)
    {
        Auth::user()
            ->update([
                'url_name' => $request->input('url_name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),

            ]);

        return redirect('/account');



    }


}
