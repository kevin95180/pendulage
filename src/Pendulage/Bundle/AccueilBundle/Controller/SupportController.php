<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SupportController extends Controller
{
    public function AddAction(Request $request)
    {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Support2;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\Support2Form(), $ohle);
        
        if ($this->getRequest()->isMethod('POST')) {
        
        $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "Support droite bien ajoutée");

                return $this->redirect($this->generateUrl("catenaire_lister"));
            }
        }
        
        return $this->render('PendulageAccueilBundle:Support:Add.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function FindAction()
    {
        return $this->render('PendulageAccueilBundle:Support:Find.html.twig', array(
                // ...
            ));    }

    public function RemoveAction()
    {
        return $this->render('PendulageAccueilBundle:Support:Remove.html.twig', array(
                // ...
            ));    }

    public function AddGaucheAction(Request $request)
    {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Support1;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\Support1Form(), $ohle);
        
        if ($this->getRequest()->isMethod('POST')) {
        
        $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "Support gauche bien ajoutée");

                return $this->redirect($this->generateUrl("catenaire_lister"));
            }
        }
        
        return $this->render('PendulageAccueilBundle:Support:AddGauche.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function ModifAction()
    {
        return $this->render('PendulageAccueilBundle:Support:Modif.html.twig', array(
                // ...
            ));    }
            
    public function ListerAction()
    {
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Support1');
        $listeGauche = $repo->findAll();
        
        return $this->render('PendulageAccueilBundle:Support:Lister.html.twig', array(
                "listeGauche"=>$listeGauche
            ));    }
            
    public function ListerDroiteAction()
    {
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Support2');
        $listeDroite = $repo->findAll();
        
        return $this->render('PendulageAccueilBundle:Support:Lister.html.twig', array(
                "listeDroite"=>$listeDroite
            ));    }

}
