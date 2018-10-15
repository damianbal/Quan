<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\BelongsToUser;
use App\Core\Relations\BelongsToAnswer;

class Upvote extends Model
{
    use BelongsToUser, BelongsToAnswer;

    protected $fillable = ['user_id', 'answer_id'];
}
