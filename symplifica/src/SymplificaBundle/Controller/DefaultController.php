<?php

namespace SymplificaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymplificaBundle:Default:index.html.twig');
    }
}
