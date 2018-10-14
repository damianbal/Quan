<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\HasQuestions;

class Category extends Model
{
    use HasQuestions;

    protected $fillable = ['title', 'description', 'icon'];
}
