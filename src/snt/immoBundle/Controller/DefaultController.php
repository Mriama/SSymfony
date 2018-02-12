<?php

namespace snt\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sntimmoBundle:Default:index.html.twig',array("nom"=>"Mariama Diallo"));
    }
}
