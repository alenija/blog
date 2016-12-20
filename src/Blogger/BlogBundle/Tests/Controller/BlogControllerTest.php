<?php
// src/Blogger/BlogBundle/Tests/Controller/BlogControllerTest.php

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Blogger\BlogBundle\Entity\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BlogControllerTest extends WebTestCase
{
    public function testAddBlogComment()
    {
        $client = static::createClient();

        $commentName = 'testName';
        $commentText = 'testComment';

        $crawler = $client->request('GET', '/');

//        // выводит ответ
//        $crawler->filter('.flash-error')->each(function ($node) {
//            print $node->text()."\n";
//        });
//        echo $crawler->html();

        $blogLink = $crawler->filter('article.blog h2 a')->last(); // тег - article с классом - blog, last - последний на странице
        $blogTitle = $blogLink->text();
        $crawler = $client->click($blogLink->link()); // ответ страницы блога
        $this->assertEquals(1, $crawler->filter('h2:contains("'. $blogTitle .'")')->count());

        // Select based on button value, or id or name for buttons
        $form = $crawler->selectButton('Submit')->form();

        $crawler = $client->submit($form, [
            'blogger_blogbundle_commenttype[user]'          => $commentName,
            'blogger_blogbundle_commenttype[comment]'       => $commentText,
        ]);

        // Need to follow redirect
        $crawler = $client->followRedirect();

        // Check comment is now displaying on page, as the last entry. This ensure comments
        // are posted in order of oldest to newest
        $articleCrawler = $crawler->filter('section .previous-comments article')->last(); //последний коментарий на странице

        $this->assertEquals($commentName, $articleCrawler->filter('header span.highlight')->text()); // соответствует ли заголовок комментария с заданным ранее
        $this->assertEquals($commentText, $articleCrawler->filter('p')->last()->text());  // соответствует ли тескт комментария

        // Check the sidebar to ensure latest comments are display and there is 10 of them

        $this->assertEquals(10, $crawler->filter('aside.sidebar section')->last()
            ->filter('article')->count()
        ); // проверка отображается ли 10 комментариев в сайтбаре

        $this->assertEquals($commentName, $crawler->filter('aside.sidebar section')->last()
            ->filter('article')->first() // первый комент в сайтбаре
            ->filter('header span.highlight')->text() // заголовок этого коммента 
        );
    }

    public function testAddBlog()
    {

        $client = static::createClient();

        $image = new UploadedFile(
            'web/images/image.jpeg',
            'image.jpeg',
            'image/jpeg',
            filesize('web/images/image.jpeg'),
            UPLOAD_ERR_OK,
            true
        );

        $crawler = $client->request('GET', '/blog',[],['image' => $image],[
            'PHP_AUTH_USER' => 'alen.fox',
            'PHP_AUTH_PW'   => '1111',
        ]);

        $form = $crawler->selectButton('Submit')->form();

        $form->setValues([
            'blog_bundle_type[image]' => $image,
            'blog_bundle_type[title]' => 'testTitle',
            'blog_bundle_type[author]' => 'testAuthor',
            'blog_bundle_type[blog]' => 'testBlog',
            'blog_bundle_type[tags]' => "test, tags",
        ]);
        $crawler = $client->submit($form);

        $crawler = $client->followRedirect();

        $blogLink = $crawler->filter('article.blog h2 a')->first(); // тег - article с классом - blog, last - последний на странице
        $blogTitle = $blogLink->text();
        $this->assertEquals('testTitle', $blogTitle);
    }
}