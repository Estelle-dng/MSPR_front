<?php


namespace App\Controller\Admin;


use App\Entity\Infos;
use App\Form\InfosType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\InfosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminInfosController extends AbstractController
{
    /**
     * @var InfosRepository
     */
    private $repository;

    public function __construct(InfosRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route ("/admin/listeinfos", name="listeInfos")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listeinfos()
    { /* Méthode qui récupère l'ensemble des biens */
        $infos = $this->repository->findAll();
        return $this->render('admin/listeInfos/listeinfos.html.twig', compact('infos')); /*Compact renvoie un tableau*/
    }

    /**
     * @Route ("/admin/listeinfos/create", name="admin.listeinfos.create")
     */
    public function create(Request $request)
    {
        $faq = new Infos(); // Utilisation du fichier FaqType pour créer le formulaire
        $form = $this->createForm(InfosType::class, $faq); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($faq);
            $this->em->flush();
            return $this->redirectToRoute('listeInfos');
        }
        return $this->render('admin/listeInfos/createinfo.html.twig', [
            'infos' => $faq,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeInfos/{id}", name="admin.info.edit", methods={"GET|POST"})
     */
    public function edit(Infos $infos, Request $request)
    {
        $form = $this->createForm(InfosType::class, $infos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Information modifiée avec succès');
            return $this->redirectToRoute('listeInfos');
        }

        return $this->render('admin/listeFAQ/editinfo.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeInfos/{id}", name="admin.info.delete", methods={"DELETE"})
     */
    public function delete(Infos $infos, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $infos->getId(), $request->get('_token'))) {
            $this->em->remove($infos);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeInfos');
    }

}
