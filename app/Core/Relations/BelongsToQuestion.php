<?php

namespace App\Core\Relations;

use App\Question;

trait BelongsToQuestion
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
