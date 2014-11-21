<?php

namespace Pendulage\Bundle\AccueilBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VingtCinqControllerTest extends WebTestCase
{
    public function testLister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Lister');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Remove');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Add');
    }

    public function testModifier()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Modifier');
    }

    public function testFind()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Find');
    }

    public function testFindby()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/FindBy');
    }

}
