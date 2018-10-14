<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\BelongsToQuestion;
use App\Core\Relations\BelongsToUser;

class Answer extends Model
{
    use BelongsToQuestion, BelongsToUser;

    protected $fillable = ['body', 'user_id', 'question_id'];
}
