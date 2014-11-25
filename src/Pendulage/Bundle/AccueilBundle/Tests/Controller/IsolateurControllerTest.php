<?php

namespace Pendulage\Bundle\AccueilBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IsolateurControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Iso/Add');
    }

    public function testModif()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Iso/Modif');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Iso/Remove');
    }

    public function testFind()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Iso/Find');
    }

}
