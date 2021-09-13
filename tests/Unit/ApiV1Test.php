<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiV1Test extends TestCase
{
    public function testArticlesApiV1()
    {
        $response = $this->get('/api/V1/articles');
        $response->assertOk();
    }


    public function testAuthorsApiV1()
    {
        $response = $this->get('/api/V1/authors');
        $response->assertOk();
    }


    public function testCategoriesApiV1()
    {
        $response = $this->get('/api/V1/categories');
        $response->assertOk();
    }


}
