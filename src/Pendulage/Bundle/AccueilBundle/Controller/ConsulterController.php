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
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Consultation');
        
        if ($request->isXmlHttpRequest()) {
            $motcle = $request->request->get('motcle');
            if ($motcle != '') {
                
                $listeConsultation = $repo->findBy(array('portee'=>0));

            } else {
                $listeConsultation = $repo->findAll();
            }
            
            $nbr= (int)$motcle;
            $nbrLigne = $nbr-1;
            
            return $this->render('PendulageAccueilBundle:Consulter:Lister.html.twig', array(
                'listeConsultation' => $listeConsultation,
                'nbrLigne' => $nbrLigne
            ));
        } else {
            return $this->ListerAction();
        }

    }

    public function RemoveAction() {
        return $this->render('PendulageAccueilBundle:Consulter:Remove.html.twig', array(
                        // ...
        ));
    }

    public function ListerAction() {
        
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Consultation');
        $listeConsultation = $repo->findAll();
        $nbrLigne=0;
        return $this->render('PendulageAccueilBundle:Consulter:Lister.html.twig', array(
            'listeConsultation' => $listeConsultation,
            'nbrLigne' => $nbrLigne
        ));
    }

}
