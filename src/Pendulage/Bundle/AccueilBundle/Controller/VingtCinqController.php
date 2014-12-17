<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VingtCinqController extends Controller {

    public function ListerAction() {

        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Calcul');
        $calculData = $repo->findBy(array('spanlenth' => 49.5));
        $varPortee = 51;
        $temp=0;
        
        if($varPortee>50){
            $temp=8;
        }
        elseif ($varPortee<=50 && $varPortee>45.5) {
            $temp=7;
        }
        elseif ($varPortee<=45.5 && $varPortee>41) {
            $temp=7;
        }
        elseif ($varPortee<=41 && $varPortee>36.5) {
            $temp=6;
        }
        elseif ($varPortee<=36.5 && $varPortee>32) {
            $temp=6;
        }
        elseif ($varPortee<=32 && $varPortee>0) {
            $temp=5;
        }
        elseif ($varPortee<=0) {
            $temp=0;
        }

        return $this->render('PendulageAccueilBundle:VingtCinq:Lister.html.twig', array(
            "temp"=>$temp
        ));
    }

    public function RemoveAction() {
        return $this->render('PendulageAccueilBundle:VingtCinq:Remove.html.twig', array(
                        // ...
        ));
    }

    public function AddAction(Request $request) {
        $ohle = new \Pendulage\Bundle\AccueilBundle\Entity\Calcul;
        $form = $this->createForm(new \Pendulage\Bundle\AccueilBundle\Form\AddOhleForm(), $ohle);

        if ($this->getRequest()->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($ohle);
                $em->flush();

                $this->get("session")->getFlashBag()->add("success", "Calcul bien ajouté");

                return $this->redirect($this->generateUrl("vingtCinq_lister"));
            }
        }

        return $this->render('PendulageAccueilBundle:VingtCinq:Add.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    public function ModifierAction() {
        return $this->render('PendulageAccueilBundle:VingtCinq:Modifier.html.twig', array(
                        // ...
        ));
    }

    public function FindAction() {
        return $this->render('PendulageAccueilBundle:VingtCinq:Find.html.twig', array(
                        // ...
        ));
    }

    public function FindByAction() {
        return $this->render('PendulageAccueilBundle:VingtCinq:FindBy.html.twig', array(
                        // ...
        ));
    }
    
}
