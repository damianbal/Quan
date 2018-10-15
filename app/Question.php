<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\BelongsToCategory;
use App\Core\Relations\BelongsToUser;
use App\Core\Relations\HasAnswers;

class Question extends Model
{
    use BelongsToCategory, BelongsToUser, HasAnswers;

    protected $fillable = ['title', 'user_id', 'body', 'category_id'];

    /** 
     * Questions which have at least one answer
     */
    public function scopeAnswered($query)
    {
        return $query->has('answers');
    }
}
