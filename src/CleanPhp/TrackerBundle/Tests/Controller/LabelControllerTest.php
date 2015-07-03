<?php

namespace CleanPhp\TrackerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LabelControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/label/create/new-label');

        $this->assertTrue($crawler->filter('html:contains("new-label")')->count() > 0);
    }
}
