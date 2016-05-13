<?php

namespace KP\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KP\PlatformBundle\Entity\Session;
use KP\PlatformBundle\Form\SessionType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Session controller.
 *
 * @Route("/session")
 */
class SessionController extends Controller
{
    /**
     * Finds and displays a Session entity.
     *
     * @Route("/{id}", name="session_show")
     * @Method("GET")
     */
    public function addAction(Request $request)
    {
        //$form = $this->createForm(new EnseignantType());
        //return $this->render('KPPlatformBundle::enseignants.html.twig', array(
        //'form' => $form->createView()
        //));
        $session = new Session();
        $form = $this->get('form.factory')->create(new SessionType(), $session);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($session);
            $em->flush();

            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Vous avez ajoutez un nouveau Session !')
            ;

            return $this->redirect($this->generateUrl('platform_sessions_show_list'));

        }

        return $this->render('KPPlatformBundle::sessions.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function showListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $sessions = $em->getRepository('KPPlatformBundle:Session')->getAll();

        return $this->render('KPPlatformBundle::sessionsShowList.html.twig', array(
            'sessions' => $sessions,
        ));
    }

    public function showAction(Request $request, Session $session)
    {
//        $em = $this->getDoctrine()->getManager();
//        $sessions = $em->getRepository('KPPlatformBundle:Session')->find($id);

        return $this->render('KPPlatformBundle::sessionsShow.html.twig', array('session' => $session));
    }



}
