<?php

// src/Blogger/BlogBundle/Entity/User.php

namespace Blogger\BlogBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use FOS\UserBundle\Model\User as FosUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
//class User extends FosUser implements UserInterface //нужно обновить схему БД
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string username
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string password
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string username
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string username
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string salt
     */
    protected $salt;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_role",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     *
     * @var ArrayCollection $userRoles
     */
    protected $userRoles;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Геттер для имени пользователя.
     *
     * @return string The username.
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Сеттер для имени пользователя.
     *
     * @param string $value The username.
     */
    public function setUsername($value)
    {
        $this->username = $value;
        return $this;
    }

    /**
     * Геттер для пароля.
     *
     * @return string The password.
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Сеттер для пароля.
     *
     * @param string $value The password.
     */
    public function setPassword($value)
    {
        $this->password = $value;
        return $this;
    }

    /**
     * Геттер для соли к паролю.
     *
     * @return string The salt.
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Сеттер для соли к паролю.
     *
     * @param string $value The salt.
     */
    public function setSalt($value)
    {
        $this->salt = $value;
        return $this;
    }

    /**
     * Геттер для ролей пользователя.
     *
     * @return ArrayCollection A Doctrine ArrayCollection
     */
    public function getUserRoles()
    {
        return $this->userRoles;
    }

    /**
     * Конструктор класса User
     */
    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->userRoles = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    /**
     * Сброс прав пользователя.
     */
    public function eraseCredentials()
    {

    }

    /**
     * Геттер для массива ролей.
     *
     * @return array An array of Role objects
     */
    public function getRoles()
    {
        $roles = array();

        foreach ($this->getUserRoles() as $userRole) {
            $roles[] = $userRole->getName();
        }

        return $roles;
    }

    /**
     * Сравнивает пользователя с другим пользователем и определяет
     * один и тот же ли это человек.
     *
     * @param UserInterface $user The user
     * @return boolean True if equal, false othwerwise.
     */
    public function equals(UserInterface $user)
    {
        return md5($this->getUsername()) == md5($user->getUsername());
    }
}