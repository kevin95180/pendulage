<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IsolateurController extends Controller
{
    public function AddAction(Request $request)
    {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Isolateur;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\IsolateurForm(), $ohle);
        
        if ($this->getRequest()->isMethod('POST')) {
        
        $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "Isolateur ajoutée");
                
                return $this->redirect($this->generateUrl("vingtCinq_add"));
            }
        }
        
        return $this->render('PendulageAccueilBundle:Isolateur:Add.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function ModifAction()
    {
        return $this->render('PendulageAccueilBundle:Isolateur:Modif.html.twig', array(
                // ...
            ));    }

    public function RemoveAction()
    {
        return $this->render('PendulageAccueilBundle:Isolateur:Remove.html.twig', array(
                // ...
            ));    }

    public function FindAction()
    {
        return $this->render('PendulageAccueilBundle:Isolateur:Find.html.twig', array(
                // ...
            ));    }

}
