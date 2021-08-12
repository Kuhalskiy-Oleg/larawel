<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testWelcome()
    {
    	//response - ответ
        $response = $this->get('/');
        //dd($response->getContent()); //для просмотра что отправляется во вьюшку

        //assertEquals - проверяет на совпадение ожидаемого статуса и статуса который вернулся из response
        //$this->assertEquals(200, $response->status()); //длинный код для проверки на статус

        $response->assertOk();//короткий код для проверки на статус
    }


    public function testNews()
    {
        $response = $this->get('/news');
        $response->assertOk();
    }


    public function testCategories()
    {
        $response = $this->get('/categories');
        $response->assertOk();
    }


    public function testAuthors()
    {
        $response = $this->get('authors');
        $response->assertOk();
    }
}
