<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TweetController extends Controller
{



    public function tweet(Request $request)
    {

        $user = Auth::user()->tweets()->create([
            'body' => $request->input('body'),
        ]);

        return redirect('home');

    }



}
