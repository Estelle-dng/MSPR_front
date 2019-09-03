<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @Route("admin/listeCategory")
 */
class AdminCategoryController extends AbstractController
{

    public function __construct(CategoryRepository $repository, ObjectManager $em) /*Pour récupérer les biens j'ai besoin du repository*/
    {
        $this->repository = $repository;
        $this->em=$em;
    }
    /**
     * @Route ("/ChoixEmplacement", name="Choix")
     */
    public function Choixemplacement()
    {
        $spots = $this->repository->findAll();
        return $this->render('reservation/choixemplacement.html.twig', [
            'spots' => $spots
        ]);

    }

    /**
     * @Route ("/Article/{id}", name="Article")
     */
    public function Article($id)
    {
        $spot = $this->repository->find($id);
        return $this->render('reservation/article.html.twig',[
            'spot' => $spot
        ]);
    }

    /**
     * @Route("/", name="listeCategory", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('admin/listeCategory/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/create", name="admin.category.create", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('listeCategory');
        }

        return $this->render('admin/listeCategory/new.html.twig', [
            'listeCategory' => $category,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="admin.category.edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listeCategory');
        }

        return $this->render('admin/listeCategory/edit.html.twig', [
            'listeCategory' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin.category.delete", methods={"DELETE"})
     */
    public function delete(Request $request, Category $category): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('listeCategory');
    }
}
