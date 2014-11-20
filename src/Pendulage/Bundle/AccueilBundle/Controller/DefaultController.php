<?php

namespace Pendulage\Bundle\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PendulageAccueilBundle:Default:index.html.twig');
    }
}
