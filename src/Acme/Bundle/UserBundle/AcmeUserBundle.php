<?php
// src/Acme/Bundle/UserBundle/AcmeUserBundle.php
namespace Acme\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeUserBundle extends Bundle
{
    public function getParent()
    {
        return 'OroUserBundle';
    }
}
