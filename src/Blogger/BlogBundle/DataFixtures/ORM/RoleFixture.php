<?php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Entity\User;
use Blogger\BlogBundle\Entity\Role;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class RoleFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
// создание роли ROLE_ADMIN
        $role = new Role();
        $role->setName('ROLE_ADMIN');

        $manager->persist($role);

// создание пользователя
        $user = new User();
        $user->setFirstName('Alen');
        $user->setLastName('Fox');
        $user->setEmail('Alen@example.com');
        $user->setUsername('alen.fox');
        $user->setSalt(md5(time()));
// шифрует и устанавливает пароль для пользователя,
// эти настройки совпадают с конфигурационными файлами
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('admin', $user->getSalt());
        $user->setPassword($password);
        $user->getUserRoles()->add($role);

        $manager->persist($user);

        $manager->flush(); //the really load data into the DB

    }

    public function getOrder()
    {
        return 3;
    }
}