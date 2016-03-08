<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyController extends Controller{
    /**
     * @Route ("/oras", name="afiseaza-oras")
     * 
     */
    public function orasAction() {
        $nume_oras="Bucuresti";
        
        $res = new Response(
                "<html><body><p>Numele orasului este $nume_oras </h1></body></html>"
                );
                
        return $res;
    }
    
    /**
     * @Route ("/orasSablon", name="oras-sablon")
     * 
     */
    
    
    public function orasSablonAction() {
        $nume_oras="Cluj";
        
        $this->addFlash('notice', 'Afisez mesaj redirectare 1 data!');
        
        $res = $this->render('my/orasSablon.html.twig', 
                array('oras' => $nume_oras)
                );
        return $res;
    }
    
    public function afiseazaParamAction($p1,$p2) {
        $res = new Response("<html><body><p>Cele doua orase sunt: $p1, $p2</p></body></html>");
        return $res;
            
    }
    

}