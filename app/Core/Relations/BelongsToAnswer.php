<?php

namespace App\Core\Relations;

use App\Answer;


trait BelongsToAnswer
{
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
