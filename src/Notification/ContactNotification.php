<?php

namespace App\Notification;

use App\Entity\Contact;
use Twig\Environment;

class  ContactNotification {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $rendered)
    {
        $this->mailer = $mailer;
        $this->renderer = $rendered;
    }

    public function notify (Contact $contact){
        $message = (new \Swift_Message('Question Camping :'))
            ->setFrom($contact->getEmail())
            ->setTo('campinglajamoniere@gmail.com')
            ->setReplyTo($contact->getEmail())
            ->setBody($this->renderer->render('emails/contact.html.twig', [
                'contact' => $contact
            ]), 'text/html');
        $this->mailer->send($message);
    }
}