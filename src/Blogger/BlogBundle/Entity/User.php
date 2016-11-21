<?php

// src/Blogger/BlogBundle/Entity/User.php

namespace Blogger\BlogBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use FOS\UserBundle\Model\User as FosUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_users")
 */
class User extends FosUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

}