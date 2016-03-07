<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalController extends Controller
{
   
    /**
     * @Route("/nume", name="numele_meu")
     * 
     */
    public function raspunsHtmlAction()
    {
        $myName = 'Alex';
 
        $res = new Response(
            '<html><body><h1>Acesta este numele meu: '.$myName.'</h1></body></html>'
        );
        
        return $res;
    }
    /**
     * @Route("/numeSablon", name="nume_sablon")
     * 
     */
    public function numeSablonAction()
    {
        $myName = 'Alex';
 
        $res = $this->render(
            'global/nume.html.twig',
            array('nume' => $myName)
        );
        
        return $res;
    }      
        /**
     * @Route("/afiseazaArray", name="afiseaza_array")
     * 
     */
    public function afiseazaArrayAction()
    {
        
        $data= array();
        $numar1 =10;
        $numar2 =4;
        
        
         for($i=1; $i <=$numar1; $i++){
             for($j=1;$j<$numar2;$j++){
                $data[$i][]='c'.$i .$j; 
             }
         }
 
         
        $res = $this->render(
            'global/nume2.html.twig',
            array('tabel' => $data)
        );
        
        return $res;
    }      
    
        public function paramsExAction($p1,$p2)
    {
                $res = new Response(
            '<html><body><h1>Acestea sunt variabilele: '.$p1.  ' '. $p2 . '</h1></body></html>'
        );
                return $res;
    }      

}
