<?php

use Illuminate\Database\Seeder;
use App\Services\CategoriesService;

class CategoriesSeeder extends Seeder 
{
    protected $categoriesService = null;

    protected $categories = [
        [
            'title' => 'Technology',
            'description' => 'Everything about technology',
        ],
        [
            'title' => 'Other',
            'description' => 'Everything else',
        ],
        [
            'title' => 'Politics',
            'description' => 'Talk politics here',
        ],
        [
            'title' => 'Programming',
            'description' => 'Want help with programming? Come here',
        ],
        [
            'title' => 'Food',
            'description' => 'Want to make dinner? Ask here',
        ],
        [
            'title' => 'World',
            'description' => 'Want to travel? ask here',
        ],
    ];

    public function __construct(CategoriesService $categoriesService) {
        $this->categoriesService = $categoriesService;
    }

    public function run() {
        foreach ($this->categories as $category) {
            $this->categoriesService->createCategory(
                $category['title'],
                $category['description']
            );
        }
    }
}
