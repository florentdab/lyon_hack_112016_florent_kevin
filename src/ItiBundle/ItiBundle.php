<?php

namespace ItiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ItiBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
