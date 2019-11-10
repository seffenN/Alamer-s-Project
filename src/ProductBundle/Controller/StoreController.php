<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductBundle:Store:Accueil.html.twig',array());
    }

    public function contactAction()
    {
        return $this->render('ProductBundle:Store:Contact.html.twig',array());
    }
}
