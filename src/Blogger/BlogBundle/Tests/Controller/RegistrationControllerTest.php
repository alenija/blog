<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 20.12.16
 * Time: 12:00
 */

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class RegistrationControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();

        $userName = 'testName' . random_int(0,25);
        $userEmail = $userName . 'testEmail@i.ua';
        $userEmailBroken ="@testEmail";
        $userPassword = 'password';

        $crawler = $client->request('GET', '/');
        $registerLink = $crawler->filter('ul.navigation li a:contains("Registration")');
        $crawler = $client->click($registerLink->link());

        $this->assertEquals(1, $crawler->filter('div#fos_user_registration_form')->count());

        $form = $crawler->selectButton('Register')->form();
        $crawler = $client->submit($form, [
            'fos_user_registration_form[email]'                  => $userEmail,
            'fos_user_registration_form[username]'               => $userName,
            'fos_user_registration_form[plainPassword][first]'   => $userPassword,
            'fos_user_registration_form[plainPassword][second]'  => $userPassword,
        ]);
        $crawler = $client->followRedirect();

//                // выводит ответ
//        $crawler->filter('.flash-error')->each(function ($node) {
//            print $node->text()."\n";
//        });
//        echo $crawler->html();

        $this->assertEquals(1, $crawler->filter('section p.success-message:contains("Congrats ' . $userName . ', your account is now activated.")')->count());
    }
}