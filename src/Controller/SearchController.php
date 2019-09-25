<?php

namespace App\Controller;

use App\Entity\CategorySearch;
use App\Form\CategorySearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;

class SearchController extends AbstractController
{
    /**
     * @Route ("/Reserver", name="Reserver")
     */
    public function choixemplacement(CategoryRepository $categoryRepository, Request $request)
    {
        $search = new CategorySearch(); /* Je crée une nouvelle recherche qui contient une entité vide */

        $form = $this->createForm(CategorySearchType::class, $search); /* Je lui passe le Form à utiliser et l'entité vide */
        $form->handleRequest($request); /* Je récupère la variable $request, qui contient les données de la requête *//* Gère la requête */

        /* J'execute ma requête avec la méthode "findByFilter" en lui donnant en paramètre la variable $search préalablement créée.
        Cette méthode "findByFilter" contient la requête en BDD et se situe dans mon CategoryRepository */
        $spots =$categoryRepository->findByFilter($search);

        return $this->render('reservation/reserver.html.twig', [
            'spots' => $spots,
            'form' => $form->createView(), /* On envoie notre form à la vue */
        ]);
    }
}

