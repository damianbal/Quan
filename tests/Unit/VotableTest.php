<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Upvote;
use App\Answer;
use App\Question;
use App\Category;

class VotableTest extends TestCase
{
    use RefreshDatabase;

    public function testUpvoteAndUnvoteAndVoted()
    {
        $u = User::create([
            'name' => 'UserTest',
            'email' => 'dfasdfsd@fasdf.com',
            'password' => bcrypt('xd'),
        ]);

        $c = Category::create(['title' => 'Category...']);

        $q = Question::create([
            'title' => 'QQQQQQQQQ',
            'user_id' => $u->id,
            'category_id' => $c->id,
            'body' => 'Some body for question'
        ]);

        /** @var Answer */
        $a = Answer::create([
            'body' => 'Some answer',
            'user_id' => $u->id,
            'question_id' => $q->id,
        ]);

        $this->assertEquals(false, $a->voted($u));

         $a->upvote($u);

        $this->assertEquals(true, $a->voted($u));

        $a->unvote($u);

        $this->assertEquals(false, $a->voted($u));
    }
}
