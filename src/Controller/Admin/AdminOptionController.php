<?php

namespace App\Controller\Admin;

use App\Entity\Option;
use App\Form\OptionType;
use App\Repository\OptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdminOptionController extends AbstractController
{
    /**
     * @Route("admin/listeOption", name="listeOption", methods={"GET"})
     */
    public function index(OptionRepository $optionRepository): Response
    {
        return $this->render('admin/listeOption/listeoption.html.twig', [
            'options' => $optionRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/listeOption/create", name="admin.option.create", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $option = new Option();
        $form = $this->createForm(OptionType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($option);
            $entityManager->flush();

            return $this->redirectToRoute('listeOption');
        }

        return $this->render('admin/listeOption/createoption.html.twig', [
            'listeOption' => $option,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/listeOption/{id}/edit", name="admin.option.edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Option $option): Response
    {
        $form = $this->createForm(OptionType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listeOption');
        }

        return $this->render('admin/listeOption/editoption.html.twig', [
            'listeOption' => $option,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/listeOption/{id}", name="admin.option.delete", methods={"DELETE"})
     */
    public function delete(Request $request, Option $option): Response
    {
        if ($this->isCsrfTokenValid('delete'.$option->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($option);
            $entityManager->flush();
        }

        return $this->redirectToRoute('listeOption');
    }
}
