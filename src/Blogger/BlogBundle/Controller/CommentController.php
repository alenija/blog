<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($blog_id) //show comment form
    {
        $comment = $this->processInitializationComment($blog_id);

        $form = $this->createForm(CommentType::class, $comment);

        return $this->render('BlogBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form' => $form->createView()
        ));
    }

    public function createAction(Request $request, $blog_id) //data processing in the form of a comment
    {
        $comment = $this->processInitializationComment($blog_id);

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('BloggerBlogBundle_blog_show', array(
                    'id' => $comment->getBlog()->getId(),
                    'slug' => $comment->getBlog()->getSlug())) .
                '#comment-' . $comment->getId()
            );
        }

        return $this->render('BlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form' => $form->createView()
        ));
    }

    public function changeAction($comment_id, Request $request) //data processing in the form of a comment
    {
        $comment = $this->getDoctrine()
            ->getRepository('BlogBundle:Comment')
            ->find($request->get('comment_id'));

        if (!$comment) {
            throw $this->createNotFoundException("Unable to find Comment entit");
        }

        $comment->setComment($comment->getComment());

        $form = $this->createFormBuilder($comment)
            ->add('comment')
            ->getForm();

        $form->handleRequest($request);
        $title = $comment->getBlog()->getTitle();

        if ($form->isSubmitted() && $form->isValid()) {

            $now = new\DateTime('now');
            $getComment = $comment->getComment();

            $em = $this->getDoctrine()->getManager();
            $comment = $em->getRepository('BlogBundle:Comment')->find($comment_id);

            $comment->setUpdated($now);
            $comment->setComment($getComment);

            $em->flush();
            
            return $this->redirect($this->generateUrl('BloggerBlogBundle_blog_show', array(
                'id' => $comment->getBlog()->getId(),
                'slug' => $comment->getBlog()->getSlug(),
            )));
        }

        return $this->render('BlogBundle:Comment:edit.html.twig', array(
            'form' => $form->createView(),
            'comment' => $comment,
            'Title' => $title,
        ));
    }

    protected function processInitializationComment($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new Comment();
        $comment->setBlog($blog);

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->getUser()->getUsername();
            $comment->setUser($user);
        }

        return $comment;
    }

    protected function getBlog($blog_id)
    {
        $blog = $this->getDoctrine()->getRepository('BlogBundle:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }

}