<?php
namespace Blogger\BlogBundle\Security\Core\User;


use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Blogger\BlogBundle\Entity\User;

/**
 * Class FOSUBUserProvider
 * Class providing a bridge to use the FOSUB user provider with HWIOAuth.
 *
 * In order to use the class as a connector, the appropriate setters for the
 * property mapping should be available
 * @package Cinhetic\PublicBundle\Security\User\Bridge
 */
class FOSUBUserProvider  extends BaseClass
{
    /**
     * {@inheritDoc}
     */
    public function connect(UserInterface $user, UserResponseInterface $response)
    {
        $property = $this->getProperty($response);
        $username = $response->getUsername();
        
        //on connect - get the access token and the user ID
        $service = $response->getResourceOwner()->getName();
        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';
        
        //we "disconnect" previously connected users
        if (null !== $previousUser = $this->userManager->findUserBy([$property => $username])) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }
        
        //we connect current user
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());
        
        $this->userManager->updateUser($user);
    }
    
    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $username = $response->getUsername();
        $user = $this->userManager->findUserBy([$this->getProperty($response) => $username]);
        //when the user is registrating
        if (null === $user) {
            $service = $response->getResourceOwner()->getName();
            $setter = 'set'.ucfirst($service);
            $setter_id = $setter.'Id';
            $setter_token = $setter.'AccessToken';

            // create new user here
//            $user = $this->userManager->createUser();
            $user = new User();
            $user->$setter_id($username);

            $user->$setter_token($response->getAccessToken());
            //I have set all requested data with the user's username
            //modify here with relevant data
            
//            $user->setUsername($username);
            $user->setUsername($response->getNickname());
            $user->setEmail($response->getEmail());
            if($response->getEmail())
            {
                $user->setEmail($response->getEmail());
            } else {
                $user->setEmail($username);
            }
//            $user->setPassword($username);
            $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
            $password = $encoder->encodePassword($response->getEmail(), $user->getSalt());
            $user->setPassword($password);
//            $user->setRoles(['ROLE_USER']);
//            $user->addRole('ROLE_USER');
            $user->setEnabled(true);
            $this->userManager->updateUser($user);
            
            return $user;
        }
        //if user exists - go with the HWIOAuth way
        $user = parent::loadUserByOAuthUserResponse($response);
        
        $serviceName = $response->getResourceOwner()->getName();
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';
        //update access token
        $user->$setter($response->getAccessToken());
        
        return $user;
    }
}