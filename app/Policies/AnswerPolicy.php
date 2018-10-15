<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Answer;

class AnswerPolicy
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

    public function delete(User $user, Answer $answer)
    {
        return $user->admin == true;
    }

    public function upvote(User $user, Answer $answer)
    {
        return $user->id != $answer->user_id;
    }
}
