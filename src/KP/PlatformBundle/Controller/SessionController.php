<?php

namespace KP\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KP\PlatformBundle\Entity\Session;

/**
 * Session controller.
 *
 * @Route("/session")
 */
class SessionController extends Controller
{
    /**
     * Lists all Session entities.
     *
     * @Route("/", name="session_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sessions = $em->getRepository('KPPlatformBundle:Session')->findAll();

        return $this->render('session/index.html.twig', array(
            'sessions' => $sessions,
        ));
    }

    /**
     * Finds and displays a Session entity.
     *
     * @Route("/{id}", name="session_show")
     * @Method("GET")
     */
    public function showAction(Session $session)
    {

        return $this->render('session/show.html.twig', array(
            'session' => $session,
        ));
    }
}
