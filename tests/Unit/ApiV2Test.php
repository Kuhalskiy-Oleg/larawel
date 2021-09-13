<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiV2Test extends TestCase
{
    public function testArticlesApiV2()
    {
        $response = $this->get('/api/V2/articles');
        $response->assertOk();
    }


    public function testAuthorsApiV2()
    {
        $response = $this->get('/api/V2/authors');
        $response->assertOk();
    }


    public function testCategoriesApiV2()
    {
        $response = $this->get('/api/V2/categories');
        $response->assertOk();
    }
}
