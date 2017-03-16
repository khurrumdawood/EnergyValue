<?php

namespace VaultBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testSoftdelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/softDelete');
    }

}
