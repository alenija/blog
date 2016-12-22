<?php
// src/Blogger/BlogBundle/Controller/PageController.php
namespace Blogger\BlogBundle\Controller;

use Knp\Component\Pager\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $blogs = $this->getDoctrine()->getRepository('BlogBundle:Blog')
            ->getLatestBlogs();

        $paginator  = $this->get('knp_paginator');

        $pagination = $paginator->paginate($blogs,
            $request->query->getInt('page', 1),
            3);

        // parameters to template
        return $this->render('BlogBundle:Page:index.html.twig', [
            'blogs' => $blogs,
            'pagination' => $pagination,
        ]);
    }

    public function aboutAction()
    {
      return $this->render('BlogBundle:Page:about.html.twig');
    }

    public function contactAction(Request $request)
    {
        //data about contact (properties and methods)
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry); //create form with contact fields

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from myblog')
                    ->setFrom('alenija@i.ua')
                    ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                    ->setBody($this->renderView('BlogBundle:Page:contactEmail.txt.twig', ['enquiry' => $enquiry]));


                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
            }
        }

        return $this->render('BlogBundle:Page:contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function sidebarAction()
    {
        $tags = $this->getDoctrine()->getRepository('BlogBundle:Blog')
            ->getTags();

        $tagWeights = $this->getDoctrine()->getRepository('BlogBundle:Blog')
            ->getTagWeights($tags);

        $commentLimit = $this->container->getParameter('blogger_blog.comments.latest_comment_limit');

        $latestComments = $this->getDoctrine()->getRepository('BlogBundle:Comment')
            ->getLatestComments($commentLimit);

        return $this->render('BlogBundle:Page:sidebar.html.twig', [
            'tags' => $tagWeights,
            'latestComments'    => $latestComments,
        ]);
    }

}