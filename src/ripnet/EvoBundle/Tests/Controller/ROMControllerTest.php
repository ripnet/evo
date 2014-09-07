<?php

namespace ripnet\EvoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ROMControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testTree()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tree');
    }

}
