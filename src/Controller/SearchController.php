<?php

namespace App\Controller;

use App\Form\SearchCategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;

class SearchController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function searchCategory(Request $request, CategoryRepository $categoryRepository)
    {
        $category = [];
        $searchCategoryForm = $this->createForm(SearchCategoryType::class);



        if ($searchCategoryForm->handleRequest($request)->isSubmitted() && $searchCategoryForm->isValid()) {

            $criteria = $searchCategoryForm->getData();
            $category = $categoryRepository->searchCategory($criteria);

        }
        return $this->render('reservation/search.html.twig', [
            'search_form' => $searchCategoryForm->createView(),
            'categories' => $category,
        ]);
    }

    /**
     * @Route ("/Reserver", name="Reserver")
     */
    public function Choixemplacement(CategoryRepository $categoryRepository, Request $request)
    {
        $spots =$categoryRepository->findAll();
        $category = [];
        $searchCategoryForm = $this->createForm(SearchCategoryType::class);

        if ($searchCategoryForm->handleRequest($request)->isSubmitted() && $searchCategoryForm->isValid()) {

            $criteria = $searchCategoryForm->getData();
            $category = $categoryRepository->searchCategory($criteria);

        }
        return $this->render('reservation/reserver.html.twig', [
            'spots' => $spots,
            'search_form' => $searchCategoryForm->createView(),
            'categories' => $category
        ]);

    }

}