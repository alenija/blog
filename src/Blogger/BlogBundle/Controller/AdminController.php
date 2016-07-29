<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        $blogs = $this->getDoctrine()->getRepository('BlogBundle:Blog')
            ->getLatestBlogs();
        
        $a = "test";
        
        return $this->render('BlogBundle:Admin:index.html.twig', array(
            'blogs' => $blogs,
            'aaa' =>$a));
    }
}
