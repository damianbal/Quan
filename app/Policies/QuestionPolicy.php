<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Question;

class QuestionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function delete(User $user, Question $question)
    {
        if($user->admin) return true;
        
        // user can remove post if it was not answered
        if($question->user_id == $user->id && $question->answers->count() < 1) return true;

        return false;
    }
}
