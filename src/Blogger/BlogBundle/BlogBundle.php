<?php

namespace Blogger\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BlogBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
