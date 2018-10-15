<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\BelongsToQuestion;
use App\Core\Relations\BelongsToUser;
use App\Core\Relations\HasVotes;
use App\Core\Votable;

class Answer extends Model
{
    use BelongsToQuestion, BelongsToUser, HasVotes, Votable;

    protected $fillable = ['body', 'user_id', 'question_id'];

    public function scopeWhereQuestion($query, $question) 
    {
        return $query->where('question_id', $question->id);
    }
}
