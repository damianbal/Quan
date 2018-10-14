<?php

namespace App\Services;

use App\Category;
use App\Question;
use App\User;


class CategoriesService
{
    public function createCategory($title, 
                                   $description,
                                    $icon = null)
    {
        $c = Category::create([
            'title' => $title,
            'description' => $description,
            'icon' => $icon,
        ]);

        return $c;
    }

    public function addQuestionToCategory(Category $category, $params)
    {
        return $category->questions()->create($params);
    }
}
