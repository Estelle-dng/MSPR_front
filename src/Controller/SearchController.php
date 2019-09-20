<?php

namespace App\Controller;


use App\Entity\Category;
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
     * @param CategoryRepository $categoryRepository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function Choixemplacement(CategoryRepository $categoryRepository, Request $request)
    {
        $search = new CategorySearch();

        $form = $this->createForm(CategorySearchType::class, $search);
        $form->handleRequest($request);
        $spots =$categoryRepository->findByFilter($search);

        return $this->render('reservation/reserver.html.twig', [
            'spots' => $spots,
            'form' => $form->createView(),
        ]);
    }

}