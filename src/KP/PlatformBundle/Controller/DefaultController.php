<?php

namespace KP\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KPPlatformBundle:Default:index.html.twig');
    }
}
