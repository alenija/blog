<?php
// src/Blogger/BlogBundle/Tests/Entity/CommentTest.php

namespace Blogger\BlogBundle\Tests\Entity;

use Blogger\BlogBundle\Entity\Comment;

class CommentTest extends \PHPUnit_Framework_TestCase
{
    public function testSetComment()
    {
        $comment = new Comment();

        $comment->setComment('hello-world');
        $this->assertEquals('hello-world', $comment->getComment());
    }
}