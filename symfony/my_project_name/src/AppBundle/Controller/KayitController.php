<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Kayit;
use AppBundle\Services\KayitService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class KayitController extends Controller
{
    /**
     * @Route("/", name="kayitekleme")
     */
    public function kayitAction(Request $request)
    {
            $yeni_kayit = new Kayit();
            $yeni_kayit->setAd($_POST['ad']);
            $yeni_kayit->setSoyad($_POST['soyad']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($yeni_kayit);
            $em->flush();

        return $this->render('kayit/kayit.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/b", name="buyukharfkayit")
     */
    public function buyukHarfAction( Request $request){
        $kayitlar = $this->getDoctrine()->getRepository('AppBundle:Kayit')->findAll();

       foreach ($kayitlar as $kayit) {
            $yenikayit=new KayitService();
            $yeni = $yenikayit->buyukHarf($kayit->getAd());
        }
        return $this->render('kayit/buyukharf.html.twig',array('yenikayit'=>$yeni));


    }

}