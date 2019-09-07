<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


    /**
     * @Route ("/Proximité", name="Proximité")
     */
    public function Proximite()
    {
        return $this->render('vitrine/proximite.html.twig');
    }


    /**
     * @Route ("/Contact", name="Contact")
     */
    public function Contact()
    {
        return $this->render('vitrine/contact.html.twig');
    }

    /**
     * @Route ("/TarifsTente", name="TarifsTente")
     */
    public function Tariftente()
    {
        return $this->render('vitrine/tarifstentes.html.twig');
    }

    /**
     * @Route ("/Inscription", name="Inscription")
     */
    public function Inscription()
    {
        return $this->render('vitrine/inscription.html.twig');
    }

    /**
     * @Route ("/mesreservations", name="mesreservations")
     */
    public function mesreservations()
    {
        $user = $this->getUser();
        return $this->render('vitrine/mesreservations.html.twig',
            [
                'user' => $user
            ]);
    }
}