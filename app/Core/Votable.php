<?php

namespace App\Core;

use App\User;
use App\Upvote;

trait Votable
{
    /** 
     * Upvote by user
     */
    public function upvote(User $user)
    {
        if(!$this->voted($user)) 
        {
            $v = Upvote::create([
                'user_id' => $user->id,
                'answer_id' => $this->id
            ]);

            if($v) return true;
        }

        return false;
    }

    /**
     * Unvote
     *
     * @param User $user
     * @return void
     */
    public function unvote(User $user)
    {
        if($this->voted($user)) 
        {
            Upvote::where([
                'user_id' => $user->id,
                'answer_id' => $this->id,
            ])->delete();
        }
    }

    /**
     * Did user upvoted?
     *
     * @param User $user
     * @return boolean
     */
    public function voted(User $user)
    {
        return Upvote::where([
            ['user_id', '=', $user->id],
            ['answer_id', '=', $this->id]
        ])->count() > 0;
    }
}
