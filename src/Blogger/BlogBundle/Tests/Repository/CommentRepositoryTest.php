<?php
// src/Blogger/BlogBundle/Tests/Repository/CommentRepositoryTest.php

namespace Blogger\BlogBundle\Tests\Repository;

use Blogger\BlogBundle\Entity\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentRepositoryTest extends WebTestCase
{
    /**
     * @var \Blogger\BlogBundle\Entity\Repository\CommentRepository
     */
    private $commentRepository;

    public function setUp()
    {
        $kernel = static::createKernel();
        $kernel->boot();
        $this->commentRepository = $kernel->getContainer()
            ->get('doctrine.orm.entity_manager')
            ->getRepository('BlogBundle:Comment')
        ;
    }

    public function testGetCommentsForBlog(){
        $commentsForBlog = $this->commentRepository->getCommentsForBlog('1');
        $this->assertTrue(count($commentsForBlog) > 0);
    }

    public function testGetLatestComments(){
        $commentsForBlog = $this->commentRepository->getLatestComments('2');
        $this->assertTrue(count($commentsForBlog) == 2);
    }
}