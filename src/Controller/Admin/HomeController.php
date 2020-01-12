<?php


namespace App\Controller\Admin;

use App\Entity\Reservation;
use App\Form\ReservationAnnulationType;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\UrgencesRepository;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;

class HomeController extends AbstractController
{
    public function __construct(ObjectManager $em)
    {
        $this->em=$em;
    }

    /**
     * @Route ("/admin/Dashboard", name="Dashboard")
     */

    public function Dashboard()
    {
        return $this->render('admin/dashboard.html.twig');
    }

    /**
     * @Route ("/addphoto", name="addphoto")
     */

    public function Addphoto(UrgencesRepository $urgencesRepository)
    {
        return $this->render('vitrine/addphoto.html.twig', [
        'urgences' => $urgencesRepository->findAll()
    ]);
    }

    /**
     * @Route ("/admin/ListeReservation", name="ListeResa")
     * @param ReservationRepository $reservationRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ListResa(ReservationRepository $reservationRepository)
    {
        return $this->render('admin/listeReservation/listereservation.html.twig', [
        'reservations' => $reservationRepository->findAll()
        ]);
    }

    /**
     * @Route ("/admin/listetReservation/{id}", name="admin.resa.edit", methods={"GET|POST"})
     * @param Reservation $reservation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(Reservation $reservation, Request $request)
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('ListeResa');
        }

        return $this->render('admin/listeReservation/editreservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeReservation/{id}", name="admin.resa.delete", methods={"DELETE"})
     * @param Reservation $reservation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Reservation $reservation, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->get('_token'))){
            $this->em->remove($reservation);
            $this->em->flush();
        }
        return $this->redirectToRoute('ListeResa');
    }

    /**
     * @Route ("/annulerReservation/{id}", name="resa.annulation", methods={"GET|POST"})
     * @param Reservation $reservation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function Annulation(Reservation $reservation, Request $request)
    {
        $form = $this->createForm(ReservationAnnulationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render('reservation/annulationreservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView()
        ]);
    }
}
