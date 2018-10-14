<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        // get all pages paginated by 10 results on page
        $questions = Question::latest()->with(['user', 'category'])->paginate(10);
        
        // get all categories ordered by most questions asked
        $categories = Category::withCount('questions')->orderBy('questions_count', 'DESC')->get();

        // get users with most answers
        $topUsers = User::withCount('answers')->orderBy('answers_count', 'DESC')->limit(6)->get();

        return view('home.latest', ['questions' => $questions, 
                                    'categories' => $categories, 
                                    'topUsers' => $topUsers
        ]);
    }
}
