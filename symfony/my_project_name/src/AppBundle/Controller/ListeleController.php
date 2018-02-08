<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Kayit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListeleController extends Controller
{
    /**
     * @Route("/listele", name="listele")
     */
    public function listeleAction(Request $request)
    {
        $liste=$this->getDoctrine()->getRepository('AppBundle:Kayit')->findAll();

        return $this->render('kayit/listele.html.twig',array('kayitlar'=>$liste));
    }
}

