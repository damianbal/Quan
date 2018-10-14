<?php

namespace App\Core\Relations;

use App\Question;

trait HasQuestions
{
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
