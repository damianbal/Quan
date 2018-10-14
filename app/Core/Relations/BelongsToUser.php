<?php

namespace App\Core\Relations;

use App\User;

trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
