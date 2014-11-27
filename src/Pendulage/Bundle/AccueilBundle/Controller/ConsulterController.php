<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Pendulage\Bundle\AccueilBundle\Form\FindConsultationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConsulterController extends Controller {

    public function AddAction(Request $request) {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Consultation;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\ConsultationForm(), $ohle); // Form à créer

        if ($this->getRequest()->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "xxx bien ajoutée");
            }
        }

        return $this->render('PendulageAccueilBundle:Consulter:Add.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    public function ModifAction() {
        return $this->render('PendulageAccueilBundle:Consulter:Modif.html.twig', array(
                        // ...
        ));
    }

    public function FindAction() {

        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $motcle = '';
            $motcle = $request->request->get('motcle');

            if ($motcle != '') {
                
                $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Consultation');
                $listeConsultation = $repo->findAll();

            } else {
                $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Consultation');
                $listeConsultation = $repo->findAll();
            }

            return $this->container->get('templating')->renderResponse('PendulageAccueilBundle:Consulter:Lister.html.twig', array(
                        'listeConsultation' => $listeConsultation
            ));
        } else {
            return $this->ListerAction();
        }

        //        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Consultation');
        //        
        //        $listeConsultationByPortee = $repo->findBy(array('portee'=>$portee));
        //
    //        return $this->render('PendulageAccueilBundle:Consulter:Find.html.twig', array(
        //            "listeConsultationByPortee" => $listeConsultationByPortee
        //        ));
    }

    public function RemoveAction() {
        return $this->render('PendulageAccueilBundle:Consulter:Remove.html.twig', array(
                        // ...
        ));
    }

    public function ListerAction() {

        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Consultation');
        $listeConsultation = $repo->findAll();

        $form = $this->container->get('form.factory')->create(new FindConsultationForm());

        return $this->container->get('templating')->renderResponse('PendulageAccueilBundle:Consulter:Lister.html.twig', array(
                    'listeConsultation' => $listeConsultation,
                    'form' => $form->createView()
        ));
    }

}
