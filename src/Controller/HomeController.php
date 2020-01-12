<?php

namespace App\Controller;

use App\Entity\CommandDetails;
use App\Entity\Contact;
use App\Entity\Faq;
use App\Entity\Urgences;
use App\Form\UrgencesType;
use App\Repository\InfosRepository;
use App\Repository\UrgencesRepository;
use App\Repository\FaqRepository;
use App\Entity\User;
use App\Form\CategoryType;
use App\Form\CommandDetailsType;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route ("/", name="Accueil")
     */

    public function Accueil(FaqRepository $faqRepository, UrgencesRepository $urgencesRepository, InfosRepository $infosRepository)
    {

        return $this->render('vitrine/accueil.html.twig', [
            'faqs' => $faqRepository->findAll(),
            'urgences' => $urgencesRepository->findAll(),
            'infos' => $infosRepository->findAll()
        ]);
    }

    /**
     * @Route ("/Proximité", name="Proximité")
     */
    public function Proximite()
    {
        return $this->render('vitrine/proximite.html.twig');
    }


    /**
     * @Route ("/Contact", name="Contact")
     */
    public function Contact(Request $request, ContactNotification $notification, UrgencesRepository $urgencesRepository)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact);
            $this->addFlash('success', 'Mail envoyé avec succès');
            return $this->redirectToRoute('Contact');
        }

        return $this->render('vitrine/contact.html.twig', [
            'form' => $form->createView(),
            'urgences' =>$urgencesRepository->findAll()
        ]);
    }

    /**
     * @Route ("/TarifsTente", name="TarifsTente")
     */
    public function Tariftente()
    {
        return $this->render('vitrine/tarifstentes.html.twig');
    }

    /**
     * @Route ("/Inscription", name="Inscription")
     */
    public function Inscription(Request $request)
    {
        $panier = new CommandDetails();
        $form = $this->createForm(CommandDetailsType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($panier);// On enregistre l'entité créée avec persist
            $this->em->flush();

            return $this->redirectToRoute('profile');
        }
        return $this->render('reservation/inscription.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(), /* On crée la vue du formulaire que l'on nomme form*/
        ]);
    }

    /**
     * @Route ("/admin/Newsletter", name="Newsletter")
     */
    public function newsletter(UserRepository $userRepository)
    {
    return $this->render('admin/newsletter.html.twig',[
        "inscrits" => $userRepository->findByNewsletter(1)
    ]);
    }
}
