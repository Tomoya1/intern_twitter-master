<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $user = \Auth::user();
        $tweets = $user->tweets()->latest()->get();

        return view('home',['user' => $user, 'tweets' => $tweets]);
    }

}
