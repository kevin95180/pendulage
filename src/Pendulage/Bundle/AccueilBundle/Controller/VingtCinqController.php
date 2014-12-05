<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VingtCinqController extends Controller
{
    public function ListerAction()
    {
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Calcul');
        $listeVingtCinq = $repo->findAll();
        
        //fonction obtenir le nombre de pendule
//        $NbPendules = $repo->findBy(array('portee'=>0));
        $NbPendules=40;
        if ($NbPendules<=54.5 && $NbPendules>50) {
            $temp=8;
        }
        elseif ($NbPendules<=50 && $NbPendules>45.5) {
            $temp=7;
        }
        elseif ($NbPendules<=45.5 && $NbPendules>41) {
            $temp=7;
        }
        elseif ($NbPendules<=41 && $NbPendules>36.5) {
            $temp=6;
        }
        elseif ($NbPendules<=36.5 && $NbPendules>32) {
            $temp=6;
        }
        elseif ($NbPendules<=32&& $NbPendules>0) {
            $temp=5;
        }else{
            $temp=0;
        }
        
        
        return $this->render('PendulageAccueilBundle:VingtCinq:Lister.html.twig', array(
              "listeVingtCinq"=>$listeVingtCinq,
                "temp"=>$temp
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

                return $this->redirect($this->generateUrl("vingtCinq_lister"));
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
    
    public function NbPendulesAction()
    {
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Calcul');
        $listeVingtCinq = $repo->findAll();
        
        //function NbPendules
        function NbPendules($varPortee){
            if($varPortee<= 0){
                $temp=0;
            }
            else if($varPortee<= 32){
                $temp=5;
            }
            else if($varPortee<= 36.5){
                $temp=6;
            }
            else if($varPortee<= 41){
                $temp=6;
            }
            else if($varPortee<= 45.5){
                $temp=7;
            }
            else if($varPortee<= 50){
                $temp=7;
            }
            else if($varPortee<= 54.5){
                $temp=8;
            }
            return $temp;
        }
        
        return $this->render('PendulageAccueilBundle:VingtCinq:Lister.html.twig', array(
              "listeVingtCinq"=>$listeVingtCinq ,
                "temp"=>  $temp
            ));    }

}
