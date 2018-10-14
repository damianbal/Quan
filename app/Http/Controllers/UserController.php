<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function show(Request $request, User $user)
    {
        $latestQuestions = $user->questions()->latest()->limit(10)->get();
        $latestAnswers = $user->answers()->with(['question'])->latest()->limit(10)->get();

        return view('user.show', ['user' => $user, 
                                  'latestQuestions' => $latestQuestions,
                                  'latestAnswers' => $latestAnswers
        ]);
    }
}
