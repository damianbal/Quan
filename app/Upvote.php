<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\BelongsToUser;

class Upvote extends Model
{
    use BelongsToUser;
}
