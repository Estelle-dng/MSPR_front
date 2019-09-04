<?php


namespace App\Controller\Admin;

use App\Entity\Discount;
use App\Form\DiscountType;
use App\Repository\DiscountRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminDiscountController extends AbstractController
{

    /**
     * @var DiscountRepository
     */
    private $repository;

    public function __construct(DiscountRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }


    /**
     * @Route ("/admin/listediscount", name="listeDiscount")
     */
    public function listediscount()
    {
        $discounts = $this->repository->findAll();
        return $this->render('admin/listeDiscount/listediscount.html.twig', [
            "discounts" => $discounts
        ]);
    }

    /**
     * @Route ("/admin/listediscount/create", name="admin.listediscount.create")
     */
    public function create(Request $request)
    {
        $discount = new Discount(); // Utilisation du fichier tarifType pour créer le formulaire
        $form = $this->createForm(DiscountType::class, $discount); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($discount);// On enregistre l'entité créée avec persist
            $this->em->flush();
            return $this->redirectToRoute('listeDiscount');
        }
        return $this->render('admin/listeDiscount/creatediscount.html.twig', [
            'discount' => $discount,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listediscount/{id}", name="admin.discount.edit", methods={"GET|POST"})
     */
    public function edit(Discount $discount, Request $request)
    {
        $form = $this->createForm(DiscountType::class, $discount);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            return $this->redirectToRoute('listeDiscount');
        }

        return $this->render('admin/listeDiscount/editdiscount.html.twig', [
            'discount' => $discount,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listediscount/{id}", name="admin.discount.delete", methods={"DELETE"})
     */
    public function delete(Discount $discount, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $discount->getId(), $request->get('_token'))) {
            $this->em->remove($discount);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeDiscount');
    }
}