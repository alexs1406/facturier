<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Admin controller.
 *
 */
class AdminController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('AppBundle:Admin:index.html.twig', array(
            'users' => $users,
        ));
    }

  

}
  