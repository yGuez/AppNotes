<?php

namespace KP\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KP\PlatformBundle\Entity\Etudiant;
use KP\PlatformBundle\Form\EtudiantType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Enseignant controller.
 *
 * @Route("/enseignant")
 */
class EtudiantController extends Controller
{

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
        $etudiant = new Etudiant();
        $form = $this->get('form.factory')->create(new EtudiantType(), $etudiant);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();

            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Vous avez ajoutez un nouveau Etudiant !')
            ;

            return $this->redirect($this->generateUrl('platform_etudiants_show_list'));

        }

        return $this->render('KPPlatformBundle::etudiants.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function showListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $etudiants = $em->getRepository('KPPlatformBundle:Etudiant')->getAll();

        return $this->render('KPPlatformBundle::etudiantsShowList.html.twig', array(
            'etudiants' => $etudiants,
        ));
    }

    public function showAction(Request $request, Etudiant $etudiant)
    {
//        $em = $this->getDoctrine()->getManager();
//        $etudiants = $em->getRepository('KPPlatformBundle:Etudiant')->find($id);

        return $this->render('KPPlatformBundle::etudiantsShow.html.twig', array('etudiant' => $etudiant));
    }


}
