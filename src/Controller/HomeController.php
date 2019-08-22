<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


    /**
     * @Route ("/Accueil", name="Accueil")
     */

    public function Accueil()
    {

        return $this->render('vitrine/accueil.html.twig');
    }

    /**
     * @Route ("/Photos", name="Photos")
     */
    public function Photos()
    {
        return $this->render('vitrine/photos.html.twig');
    }

    /**
     * @Route ("/Proximité", name="Proximité")
     */
    public function Proximite()
    {
        return $this->render('vitrine/proximite.html.twig');
    }

    /**
     * @Route ("/FAQ", name="FAQ")
     */
    public function Faq()
    {
        return $this->render('vitrine/faq.html.twig');
    }

    /**
     * @Route ("/Contact", name="Contact")
     */
    public function Contact()
    {
        return $this->render('vitrine/contact.html.twig');
    }

    /**
     * @Route ("/ChoixEmplacement", name="Choix")
     */
    public function Choixemplacement()
    {
        return $this->render('reservation/choixemplacement.html.twig');
    }

    /**
     * @Route ("/Article", name="Article")
     */
    public function Article()
    {
        return $this->render('reservation/article.html.twig');
    }

}