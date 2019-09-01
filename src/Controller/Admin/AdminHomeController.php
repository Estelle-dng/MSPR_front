<?php

namespace App\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{

/**
 * @Route ("/Admin/TableauDeBord", name="Dashboard")
 */
  public function Dashboard(){
      return $this->render("admin/dashboard.html.twig");
  }

  /**
   * @Route ("/Admin/ListeRéservation", name="Listeresa")
   */

  public function ListeResa(){
      return $this->render("admin/listereservation.html.twig");
  }
}