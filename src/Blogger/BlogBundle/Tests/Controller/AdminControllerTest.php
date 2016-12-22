<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 22.12.16
 * Time: 12:12
 */

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $adminName = 'alen.fox';

        $crawler = $client->request('GET', '/admin/',[],[],[
            'PHP_AUTH_USER' => $adminName,
            'PHP_AUTH_PW'   => '1111',
        ]);

//        // выводит ответ
//        echo $crawler->html();

        $this->assertTrue($crawler->filter('div.admin-title h2:contains("Welcome to the administrator\'s page, '. $adminName .'!")')->count() > 0);

    }
}