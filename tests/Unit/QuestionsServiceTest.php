<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\QuestionsService;
use App\Category;
use App\User;
use App\Services\CategoriesService;

class QuestionsServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @var QuestionsService */
    protected $questionsService = null;

    public function setUp()
    {
        parent::setUp();

        $this->questionsService = new QuestionsService(new CategoriesService);
    }

    public function testCreateQuestion()
    {
        $title = 'My question 1';
        $body = 'This is my question. Hello';

        $cat = Category::create(['title' => 'Some cat', 'description' => 'Test']);
        $user = User::create(['name' => 'someUser', 'email' => 'dfasdfasd@sdasd.com', 'password' => 'sds12']);

        $q = $this->questionsService->createQuestion($cat, $user, $title, $body);

        $this->assertNotNull($q);

        $this->assertEquals('My question 1', $q->title);
        $this->assertEquals('someUser', $q->user->name);
        $this->assertEquals('Some cat', $q->category->title);
    }

    public function testAddAnswerToQuestion()
    {
        $title = 'My question 1';
        $body = 'This is my question. Hello';
        $cat = Category::create(['title' => 'Some cat', 'description' => 'Test']);
        $user = User::create(['name' => 'someUser', 'email' => 'dfasdfasd@sdasd.com', 'password' => 'sds12']);

        $q = $this->questionsService->createQuestion($cat, $user, $title, $body);

        $a = $this->questionsService->addAnswerToQuestion($q, $user, 'Hello World!');

        $this->assertNotNull($a);
        $this->assertEquals('Hello World!', $a->body);
    }
}
