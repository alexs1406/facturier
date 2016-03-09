<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller{
    /**
     * @Route("/test/number")
     */
    public function numberAction() {
        $number=  rand(0, 100);
        
        $res=new Response("<html><body>Numarul generat este <b>$number</b></body></html>");
        return $res;
    }
    /**
     * @Route("/scrieArray/{rand}/{col}")
     */
    public function scrieArrayAction($rand,$col) {
        $data=array();
        for($i=0;$i<$rand;$i++)
        {
            for($j=0;$j<$col;$j++)
            {
                $data[$i][]="cell_" . $i . $j;
            }
        } // end for($i=0;$i<$rand;$i++)
        $res = $this->render('test/genTabel.html.twig', array('tabel'=>$data));
        return $res;
        
    }

}
