<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function AddAction()
    {
        return $this->render('PendulageAccueilBundle:VingtCinq:Add.html.twig', array(
                // ...
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
