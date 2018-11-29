<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function testExample()
    {
        $response = $this->get('api/articles');
        $this->assertTrue(true);
    }
}
