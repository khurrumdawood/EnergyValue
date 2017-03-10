<?php

namespace tests\VaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use VaultBundle\Controller\DefaultController;

use PHPUnit\Framework\TestCase;

class DefaultControllerTest extends WebTestCase {

//    public function testIndex()
//    {
//        $client = static::createClient();
//
//        $crawler = $client->request('GET', '/');
//
//        $this->assertContains('Hello World', $client->getResponse()->getContent());
//    }
    public function testAdd() {
        $calc = new DefaultController();
        $result = $calc->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }

}
