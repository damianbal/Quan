<?php

namespace App\Core\Relations;

use App\Question;
use App\Answer;

trait HasAnswers 
{
    /**
     * Returns answers ordered by latest
     */
    public function answers() 
    {
        return $this->hasMany(Answer::class)->latest();
    }
}
