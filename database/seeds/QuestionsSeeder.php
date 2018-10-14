<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\User;
use App\Answer;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $q = Question::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'First question',
            'body' => 'This is first question, please answer it :)',
        ]);

        // 
        $a = Answer::create([
            'question_id' => $q->id,
            'user_id' => 1,
            'body' => 'This is my first answer to question, yeah!',
        ]);
    }
}
