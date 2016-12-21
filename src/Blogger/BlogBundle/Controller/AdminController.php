<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        $blogs = $this->getDoctrine()->getRepository('BlogBundle:Blog')
            ->getLatestBlogs();
        
        $paginator  = $this->get('knp_paginator');

        $pagination = $paginator->paginate($blogs,
            $request->query->getInt('page', 1),
            10);
        
        return $this->render('BlogBundle:Admin:index.html.twig', [
            'pagination' => $pagination,
            ]);
    }
}
