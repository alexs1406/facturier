<?php

// src/Acme/UserBundle/EventListener/UserRegistrationListener.php

namespace Acme\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class UserRegistrationListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_COMPLETED => 'fos_user.registration.completed',
        );
    }

    public function onRegistrationCompletedSuccess(FormEvent $event)
    {
        
        $url = $this->router->generate('homepage');

        $event->setResponse(new RedirectResponse($url));
    }
}