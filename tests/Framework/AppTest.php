<?php
namespace Tests\Framework;


use Framework\App;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\ServerRequest;

class AppTest extends TestCase
{
    public function testRedirect()
    {
        $app = new App;

        $request = new ServerRequest('GET', '/qwerty/');
        $response = $app->run($request);
        
        $this->assertContains('/qwerty', $response->getHeader('Location'));
        $this->assertEquals(301, $response->getStatusCode());
    }

    public function testBlog()
    {
        $app = new App;
        $request = new ServerRequest('GET', '/blog/');
        $response = $app->run($request);
        
        $this->assertContains('<p>Test OK</p>', $response->getBody());
        $this->assertEquals(200, $response->getStatusCode());
    }
}