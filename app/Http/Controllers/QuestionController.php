<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\StoreQuestionRequest;
use App\Services\QuestionsService;
use App\Answer;

class QuestionController extends Controller
{
    /** @var QuestionsService */
    protected $questionsService = null;

    public function __construct(QuestionsService $questionsService)
    {
        $this->questionsService = $questionsService;
    }

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
        $categories = Category::withCount('questions')->orderBy('questions_count', 'DESC')->get();

        return view('question.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $question = $this->questionsService->createQuestion(
            Category::find($request->get('category')),
            auth()->user(),
            $request->get('title'),
            $request->get('body')
        );

        if(!$question)
        {
            return back()->with('errors', ['Could not create question!']);
        }

        return redirect()->route('question.show', $question->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $a = Answer::withCount('votes')->whereQuestion($question)
                                        ->orderBy('votes_count', 'DESC')
                                        ->orderBy('created_at', 'DESC')->get();



        return view('question.show', ['question' => $question, 
                                     'answers' => $a]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        if(!auth()->user()->can('delete', $question))
        {
            return back()->with('errors', ['You can not delete that question!']);
        }

        $question->delete();

        return redirect()->route('home')->with('messages', ['Question was removed!']);
    }
}
