<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\CategoriesService;

class CategoriesServiceTest extends TestCase
{
    /** @var CategoriesService */
    protected $categoriesService = null;

    public function setUp()
    {
        parent::setUp();

        $this->categoriesService = new CategoriesService;
    }

    public function testCreateCategory()
    {
        $cat = $this->categoriesService->createCategory('My cat', 'Description of my cat');

        $this->assertNotNull($cat);
        $this->assertEquals('My cat', $cat->title);    
        $this->assertEquals('Description of my cat', $cat->description);
    }
}
