<?php

namespace Neblion\BaseAppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NeblionBaseAppBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
