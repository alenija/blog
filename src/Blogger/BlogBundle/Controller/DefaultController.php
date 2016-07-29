<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        return $this->render('BlogBundle:Default:index.html.twig');
        return new Response('<h3>Index_Blog</h3>');
    }
}
