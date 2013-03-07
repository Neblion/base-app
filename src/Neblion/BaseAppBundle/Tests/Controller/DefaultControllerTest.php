<?php

namespace Neblion\AppBundle\Tests\Controller;

//use Neblion\BaseAppBundle\Tests\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertTrue($crawler->filter('html:contains("Sign in")')->count() == 1);
    }
}
