<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{

/**
 * @Route ("/TableauDeBord", name="Dashboard")
 */
  public function Dashboard(){
      return $this->render("admin/dashboard.html.twig");
  }

  /**
   * @Route ("/ListeRéservation", name="Listeresa")
   */

  public function ListeResa(){
      return $this->render("admin/listereservation.html.twig");
  }
}