<?php

namespace KP\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KP\PlatformBundle\Entity\Enseignant;
use KP\PlatformBundle\Form\EnseignantType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Enseignant controller.
 *
 * @Route("/enseignant")
 */
class EnseignantController extends Controller
{
    /**
     * Lists all Enseignant entities.
     *
     * @Route("/", name="enseignant_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enseignants = $em->getRepository('KPPlatformBundle:Enseignant')->findAll();

        return $this->render('enseignant/index.html.twig', array(
            'enseignants' => $enseignants,
        ));
    }

    /**
     * Finds and displays a Enseignant entity.
     *
     * @Route("/{id}", name="enseignant_show")
     * @Method("GET")
     */
    public function addAction(Request $request)
    {
        //$form = $this->createForm(new EnseignantType());
        //return $this->render('KPPlatformBundle::enseignants.html.twig', array(
        //'form' => $form->createView()
        //));
        $enseignant = new Enseignant();
        $form = $this->get('form.factory')->create(new EnseignantType(), $enseignant);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enseignant);
            $em->flush();

            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Vous avez ajoutez un nouveau Enseignant !')
            ;

            return $this->redirect($this->generateUrl('platform_enseignants_show'));

        }

        return $this->render('KPPlatformBundle::enseignants.html.twig', array(
        'form' => $form->createView()
        ));
    }

    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $enseignants = $em->getRepository('KPPlatformBundle:Enseignant')->getAll();



        return $this->render('KPPlatformBundle::enseignantsShow.html.twig', array(
            'enseignants' => $enseignants,
        ));
    }


}
