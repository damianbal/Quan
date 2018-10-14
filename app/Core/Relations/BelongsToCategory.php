<?php

namespace App\Core\Relations;

use App\Category;

trait BelongsToCategory
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
