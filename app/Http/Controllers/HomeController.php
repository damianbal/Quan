<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->with(['user', 'category'])->paginate(10);

        return view('home.latest', ['questions' => $questions]);
    }
}
