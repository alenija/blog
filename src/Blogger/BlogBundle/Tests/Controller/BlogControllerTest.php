<?php
// src/Blogger/BlogBundle/Tests/Controller/BlogControllerTest.php

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testAddBlogComment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/1/a-day-with-symfony');

        $this->assertEquals(1, $crawler->filter('h2:contains("A day with Symfony2")')->count());

        // Select based on button value, or id or name for buttons
        $form = $crawler->selectButton('Submit')->form();

        $crawler = $client->submit($form, array(
            'blogger_blogbundle_commenttype[user]'          => 'testName',
            'blogger_blogbundle_commenttype[comment]'       => 'testComment',
        ));

        // Need to follow redirect
        $crawler = $client->followRedirect();

        // Check comment is now displaying on page, as the last entry. This ensure comments
        // are posted in order of oldest to newest
        $articleCrawler = $crawler->filter('section .previous-comments article')->last();

        $this->assertEquals('testName', $articleCrawler->filter('header span.highlight')->text());
        $this->assertEquals('testComment', $articleCrawler->filter('p')->last()->text());

        // Check the sidebar to ensure latest comments are display and there is 10 of them

        $this->assertEquals(10, $crawler->filter('aside.sidebar section')->last()
            ->filter('article')->count()
        );

        $this->assertEquals('testName', $crawler->filter('aside.sidebar section')->last()
            ->filter('article')->first()
            ->filter('header span.highlight')->text()
        );
    }
}