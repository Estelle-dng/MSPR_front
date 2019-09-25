<?php

namespace App\Notification;

use App\Entity\Contact;
use App\Entity\User;
use Twig\Environment;

class  ContactNotification {

    /**
     * @var \Swift_Mailer
     */
    private $mailer; /* J'initialise les paramètres pour les appeler dans Notify */

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $rendered)
    {                     /* Environment permet de générer le mail au format HTML */
        $this->mailer = $mailer;
        $this->renderer = $rendered;
    }

    public function notify (Contact $contact){ /* Permet d'envoyer les mails */
        $message = (new \Swift_Message('Question Camping :')) /* Nouvelle instance de swift message*/
            ->setFrom($contact->getEmail()) /* On met l'adresse de l'user pour bien pouvoir répondre au mail*/
            ->setTo('campinglajamoniere@gmail.com') /* A qui est envoyé l'email */
            ->setReplyTo($contact->getEmail()) /* A qui on va répondre */
            ->setBody($this->renderer->render('emails/contact.html.twig', [ /* Contenu de notre email */
                'contact' => $contact    /* On utilise le renderer de twig */ /*On envoie les informations du contact */
            ]), 'text/html');
        $this->mailer->send($message); /* On utilise le mailer à qui on passe le $message en paramètres */
    }
}