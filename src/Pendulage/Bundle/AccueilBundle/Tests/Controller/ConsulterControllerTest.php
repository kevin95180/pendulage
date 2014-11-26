<?php

namespace Pendulage\Bundle\AccueilBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConsulterControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Consulter/Add');
    }

    public function testModif()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Consulter/Modif');
    }

    public function testFind()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Consulter/Find');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Consulter/Remove');
    }

    public function testLister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Consulter/Lister');
    }

}
