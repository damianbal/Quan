<?php

namespace App\Services;

use App\Category;

use App\Services\CategoriesService;
use App\Question;
use App\User;

class QuestionsService
{
    /** @var CategoriesService */
    protected $categoriesService = null;
    
    public function __construct(CategoriesService $categoriesService)
    {
        $this->categoriesService = $categoriesService;    
    }

    /**
     * Add answer to question
     *
     * @param Question $question
     * @param User $user
     * @param string $body
     * @return mixed
     */
    public function addAnswerToQuestion(Question $question, User $user, $body) 
    {
        $answer = $question->answers()->create([
            'user_id' => $user->id,
            'body' => $body
        ]);

        return $answer;
    }

    /**
     * Create question in category
     *
     * @param Category $category
     * @param string $title
     * @param string $body
     * @return mixed
     */
    public function createQuestion(Category $category, User $user, $title, $body)
    {
        $question = $this->categoriesService->addQuestionToCategory($category, [
            'title' => $title,
            'body' => $body,
            'user_id' => $user->id
        ]);

        return $question;
    }
}
