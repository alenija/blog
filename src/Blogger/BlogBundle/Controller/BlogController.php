<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\BlogType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        //выборка из БД по ключу в $blog
        $blog = $em->getRepository('BlogBundle:Blog')
            ->find($id) //метод получает объект по его первичному ключу
        ;

        if (!$blog) {
            throw $this->createNotFoundException('Sorry. Unable to find Blog post.'); //если сущность не найдена -> 404
        }

        $comments = $em->getRepository('BlogBundle:Comment')
            ->getCommentsForBlog($blog->getId());
        
        $b = count($em->getRepository('BlogBundle:Comment')
            ->getCommentsForBlog($blog->getId()));

        

        return $this->render('BlogBundle:Blog:show.html.twig', array( //если сущность найдена - передаем ее во вьюшку
            'blog' => $blog, //во вьюшке twig-а будет массив blog с данными из $blog
            'comments' => $comments,
            'b' =>$b,
        ));
    }

    public function createAction(Request $request)
    {
        $blog  = new Blog();

        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $file stores the uploaded image file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $blog->getImage();
            // Generate a unique name for the file before saving it
            //guessExtension() - Returns the extension based on the mime type.
            $fileName = substr(md5(uniqid()),0 ,14).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(  //
                $this->container->getParameter('images_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $blog->setImage($fileName);

            $em = $this->getDoctrine()
                ->getManager();

            $em->persist($blog);
            $em->flush();
            
            return $this->redirect($this->generateUrl('BloggerBlogBundle_homepage'));
        }

        return $this->render('BlogBundle:Blog:create.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BlogBundle:Blog')->find($id);
        $noticeTitle = $em->getRepository('BlogBundle:Blog')->find($id)->getTitle();
        $noticeAuthor = $em->getRepository('BlogBundle:Blog')->find($id)->getAuthor();
        $em->remove($blog,$id);
        $em->flush();

        $this->addFlash('notice', "Delete post: \"" . $noticeTitle. "\" by ". $noticeAuthor);

        return $this->redirect($this->generateUrl('admin_home'));
    }

    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BlogBundle:Blog')->find($id);
        $noticeTitle = $em->getRepository('BlogBundle:Blog')->find($id)->getTitle();

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog entity.');
        }

        $blog->setTitle($blog->getTitle());
        $blog->setAuthor($blog->getAuthor());
        $blog->setBlog($blog->getBlog());
        $blog->setImage($blog->getImage());
        $blog->setTags($blog->getTags());

        $form = $this->createFormBuilder($blog)
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('image', FileType::class, array('data_class' => null))
            ->add('tags')
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $file stores the uploaded image file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $blog->getImage();
            $fileName = substr(md5(uniqid()),0 ,14).'.'.$file->guessExtension();
            $file->move(
                $this->container->getParameter('images_directory'),
                $fileName
            );

            $now = new\DateTime('now');
            $getTitle = $blog->getTitle();
            $getAuthor = $blog->getAuthor();
            $getBlog = $blog->getBlog();
            $getTags = $blog->getTags();

            $em = $this->getDoctrine()->getManager();
            $blog = $em->getRepository('BlogBundle:Blog')->find($id);

            $blog->setUpdated($now);
            $blog->setTitle($getTitle);
            $blog->setAuthor($getAuthor);
            $blog->setBlog($getBlog);
            $blog->setImage($fileName);
            $blog->setTags($getTags);

            $em->flush();

            $this->addFlash('notice', "Update post: \"" . $noticeTitle . "\"");
            return $this->redirect($this->generateUrl('admin_home'));
        }

        return $this->render('BlogBundle:Blog:edit.html.twig', array(
            'form' => $form->createView(),
            'Title' => $noticeTitle
        ));

    }
}
