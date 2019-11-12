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

    public function meteauxAction()
    {
        return $this->render('ProductBundle:Store:metaux.html.twig',array());
    }

    public function AnimalAction()
    {
        return $this->render('ProductBundle:Store:animal.html.twig',array());
    }

    public function FoodsAction()
    {
        return $this->render('ProductBundle:Store:Foods.html.twig',array());
    }
    public function TransportAction()
    {
        return $this->render('ProductBundle:Store:transport.html.twig',array());
    }
    public function AboutAction()
    {
        return $this->render('ProductBundle:Store:about.html.twig',array());
    }
}
