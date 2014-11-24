<?php

namespace Pendulage\Bundle\AccueilBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SupportControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/support/add');
    }

    public function testFind()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/support/find');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/support/remove');
    }

    public function testAddgauche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/support/addGauche');
    }

    public function testModif()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/support/modif');
    }

}
