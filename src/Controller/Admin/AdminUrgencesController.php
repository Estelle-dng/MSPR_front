<?php


namespace App\Controller\Admin;


use App\Entity\Urgences;
use App\Form\UrgencesType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UrgencesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminUrgencesController extends AbstractController
{
    /**
     * @var UrgencesRepository
     */
    private $repository;

    public function __construct(UrgencesRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route ("/admin/listeurgences", name="listeUrgences")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listeurgences()
    { /* Méthode qui récupère l'ensemble des biens */
        $urgences = $this->repository->findAll();
        return $this->render('admin/listeUrgences/listeinfos.html.twig', compact('urgences')); /*Compact renvoie un tableau*/
    }

    /**
     * @Route ("/admin/listeurgences/create", name="admin.listeurgences.create")
     */
    public function create(Request $request)
    {
        $faq = new Urgences(); // Utilisation du fichier FaqType pour créer le formulaire
        $form = $this->createForm(UrgencesType::class, $faq); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($faq);
            $this->em->flush();
            return $this->redirectToRoute('listeUrgences');
        }
        return $this->render('admin/listeUrgences/createinfo.html.twig', [
            'urgences' => $faq,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeUrgences/{id}", name="admin.urgence.edit", methods={"GET|POST"})
     */
    public function edit(Urgences $urgences, Request $request)
    {
        $form = $this->createForm(UrgencesType::class, $urgences);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Information modifiée avec succès');
            return $this->redirectToRoute('listeUrgences');
        }

        return $this->render('admin/listeFAQ/editinfo.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeUrgences/{id}", name="admin.urgence.delete", methods={"DELETE"})
     */
    public function delete(Urgences $urgences, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $urgences->getId(), $request->get('_token'))) {
            $this->em->remove($urgences);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeUrgences');
    }

}
