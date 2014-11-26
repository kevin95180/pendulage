<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConsulterController extends Controller
{
    public function AddAction()
    {
        return $this->render('PendulageAccueilBundle:Consulter:Add.html.twig', array(
                // ...
            ));    }

    public function ModifAction()
    {
        return $this->render('PendulageAccueilBundle:Consulter:Modif.html.twig', array(
                // ...
            ));    }

    public function FindAction()
    {
        return $this->render('PendulageAccueilBundle:Consulter:Find.html.twig', array(
                // ...
            ));    }

    public function RemoveAction()
    {
        return $this->render('PendulageAccueilBundle:Consulter:Remove.html.twig', array(
                // ...
            ));    }

    public function ListerAction()
    {
        return $this->render('PendulageAccueilBundle:Consulter:Lister.html.twig', array(
                // ...
            ));    }

}
