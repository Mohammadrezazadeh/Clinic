<?php

namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class FosListener implements EventSubscriberInterface {

    private $router;
    private $em;

    public function __construct(UrlGeneratorInterface $router, \Doctrine\ORM\EntityManager $entityManager) {
        $this->router = $router;
        $this->em = $entityManager;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents() {
        return array(
            FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordResettingSuccess',
            FOSUserEvents::REGISTRATION_COMPLETED => 'onRegistrationCompleted',
        );
    }

    public function onRegistrationCompleted(\FOS\UserBundle\Event\FilterUserResponseEvent $userEvent) {
       $user = $userEvent->getUser();
       $user->setLastLogin(new \DateTime());
       $this->em->flush();
     
    }

    public function onPasswordResettingSuccess(FormEvent $event) {
        $url = $this->router->generate('homepage');

        $event->setResponse(new RedirectResponse($url));
    }

}
