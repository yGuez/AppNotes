<?php


// src/KP/PlatformBundle/Controller/AdvertController.php

namespace KP\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller

{

    public function indexAction()

    {

        $content = $this->get('templating')->render('KPPlatformBundle:Advert:index.html.twig', array(

            'nom' => 'Yves'
        ));

        return new Response($content);

    }

}