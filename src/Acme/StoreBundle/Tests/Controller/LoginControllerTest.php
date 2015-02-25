<?php

namespace Acme\StoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'loginpage');
    }

    public function testAuthenticate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'authenticate');
    }

}
