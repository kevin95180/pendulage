<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Pendulage\AccueilBundle\Entity\Ohle;
use Pendulage\AccueilBundle\Form\OhleForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatenaireController extends Controller
{
    public function ListerAction()
    {
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Ohle');
        $listeOhle = $repo->findAll();
        
        return $this->render('PendulageAccueilBundle:Catenaire:Lister.html.twig', array(
                "listeOhle"=>$listeOhle
            ));    }

    public function AddAction(Request $request)
    {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Ohle;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\OhleForm(), $ohle);
        
        if ($this->getRequest()->isMethod('POST')) {
        
        $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "Catenaire bien ajoutée");

                return $this->redirect($this->generateUrl("catenaire_lister"));
            }
        }
        
        return $this->render('PendulageAccueilBundle:Catenaire:Add.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function RemoveAction()
    {
        return $this->render('PendulageAccueilBundle:Catenaire:Remove.html.twig', array(
                // ...
            ));    }

    public function ModifierAction()
    {
        return $this->render('PendulageAccueilBundle:Catenaire:Modifier.html.twig', array(
                // ...
            ));    }

    public function FindByAction()
    {
        return $this->render('PendulageAccueilBundle:Catenaire:FindBy.html.twig', array(
                // ...
            ));    }

}
