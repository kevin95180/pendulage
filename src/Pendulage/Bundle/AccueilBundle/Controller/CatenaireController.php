<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatenaireController extends Controller
{
    public function ListerAction()
    {
        $repo = $this->getDoctrine()->getRepository('PendulageAccueilBundle:Ohle');
        $listeOhle = $repo->findAll();
        
        return $this->render('PendulageAccueilBundle:Catenaire:Lister.html.twig', array(
                "listeOhle"=>$listeOhle
            ));    }

    public function AddAction()
    {
        return $this->render('PendulageAccueilBundle:Catenaire:Add.html.twig', array(
                // ...
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
