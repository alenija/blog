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
    /**
     * @var $testData array
     */
    private $testData;

    public function setUp()
    {
        $this->testData['userName'] = 'testName' . random_int(0,100);
        $this->testData['userEmail'] = $this->testData['userName'] . 'testEmail@i.ua';
        $this->testData['userPassword'] = 'password';
        $this->testData['userEmailBroken'] ="@testEmail";
    }


    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $registerLink = $crawler->filter('ul.navigation li a:contains("Registration")');
        $crawler = $client->click($registerLink->link());

        $this->assertEquals(1, $crawler->filter('div#fos_user_registration_form')->count());

        $form = $crawler->selectButton('Register')->form();
        $crawler = $client->submit($form, [
            'fos_user_registration_form[email]'                  => $this->testData['userEmail'],
            'fos_user_registration_form[username]'               => $this->testData['userName'],
            'fos_user_registration_form[plainPassword][first]'   => $this->testData['userPassword'],
            'fos_user_registration_form[plainPassword][second]'  => $this->testData['userPassword'],
        ]);
        $crawler = $client->followRedirect();

//                // выводит ответ
//        $crawler->filter('.flash-error')->each(function ($node) {
//            print $node->text()."\n";
//        });
//        echo $crawler->html();

        $this->assertEquals(1, $crawler->filter('section p.success-message:contains("Congrats ' . $this->testData['userName'] . ', your account is now activated.")')->count());
    }

    public function testBadRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/register/');
        $form = $crawler->selectButton('Register')->form();
        $crawler = $client->submit($form, [
            'fos_user_registration_form[email]'                  => $this->testData['userEmailBroken'],
            'fos_user_registration_form[username]'               => '',
            'fos_user_registration_form[plainPassword][first]'   => '123',
            'fos_user_registration_form[plainPassword][second]'  => '456',
        ]);

//        echo $crawler->html();

        $this->assertTrue($crawler->filter('div#fos_user_registration_form div ul li')->count() > 0);
    }
}