<?php

namespace App\Core\Relations;

use App\Upvote;

trait HasVotes
{
    public function votes()
    {
        return $this->hasMany(Upvote::class);
    }
}
