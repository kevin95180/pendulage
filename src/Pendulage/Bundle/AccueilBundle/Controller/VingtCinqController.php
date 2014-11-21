<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VingtCinqController extends Controller
{
    public function ListerAction()
    {
        return $this->render('PendulageAccueilBundle:VingtCinq:Lister.html.twig', array(
              // ...  
            ));    }

    public function RemoveAction()
    {
        return $this->render('PendulageAccueilBundle:VingtCinq:Remove.html.twig', array(
                // ...
            ));    }

    public function AddAction(Request $request)
    {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Calcul;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\AddOhleForm(), $ohle);
        
        if ($this->getRequest()->isMethod('POST')) {
        
        $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "Calcul bien ajouté");

                return $this->redirect($this->generateUrl("pendulage_accueil_homepage"));
            }
        }
        
        return $this->render('PendulageAccueilBundle:VingtCinq:Add.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function ModifierAction()
    {
        return $this->render('PendulageAccueilBundle:VingtCinq:Modifier.html.twig', array(
                // ...
            ));    }

    public function FindAction()
    {
        return $this->render('PendulageAccueilBundle:VingtCinq:Find.html.twig', array(
                // ...
            ));    }

    public function FindByAction()
    {
        return $this->render('PendulageAccueilBundle:VingtCinq:FindBy.html.twig', array(
                // ...
            ));    }

}
