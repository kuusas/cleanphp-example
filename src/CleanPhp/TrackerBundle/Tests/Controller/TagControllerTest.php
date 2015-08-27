<?php

namespace CleanPhp\TrackerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TagControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tag/create/new-tag');

        $this->assertTrue($crawler->filter('html:contains("Successfully created")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("new-tag")')->count() > 0);
    }
}
