<?php
// src/Blogger/BlogBundle/Tests/Entity/UserTest.php

namespace Blogger\BlogBundle\Tests\Entity;

use Blogger\BlogBundle\Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testRole()
    {
        $user = new User();

        $user->addRole('ROLE_NEW');
        $this->assertTrue($user->hasRole('ROLE_NEW'));
    }
}