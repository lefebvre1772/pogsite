<?php

namespace App\Controller;

use App\Entity\Pogs;
use App\Entity\Vintages;
use App\Entity\Collectors;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PogsiteController extends AbstractController
{
    /**
     * @Route("/pogsite", name="pogsite")
     */
    public function index(): Response
    {
        return $this->render('pogsite/index.html.twig', [
            'controller_name' => 'PogsiteController',
        ]);
    }

    /**
     * @Route("/home", name="app_pogsite")
     */
    public function home($id): Response
    {
        $pogs = $this->getDoctrine()->getRepository(Product::class)->find($id);
        return $this->render('pogsite/index.html.twig', [
            'controller_name' => 'PogsiteController',
            'pogs' => $pogs,
        ]);
    }

    /**
     * @Route ("pogs", name="pogs", priority=1) 
     */
    public function pogs()
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findAll();
        // dd($pogs);
        return $this->render('pogsite/pogs/pogs2.html.twig', [
            "product" => $product
        ]);
    }

    /**
     * @Route ("/pog/{id<\d+>}", name="pog", priority=1) 
     */
    public function pog($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        return $this->render('pogsite/pogs/pog.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @Route ("vintages", name="vintages") 
     */
    public function vintages()
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findAll();
        // dd($vintages);
        return $this->render('pogsite/vintages/vintages.html.twig', [
            "product" => $product
        ]);
    }

    /**
     * @Route ("/vintage/{id<\d+>}", name="vintage") 
     */
    public function vintage($id)
    {
        $vintaproductge = $this->getDoctrine()->getRepository(Product::class)->find($id);
        return $this->render('pogsite/vintages/vintage.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @Route ("collectors", name="collectors") 
     */
    public function collectors()
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findAll();
        // dd($collectors);
        return $this->render('pogsite/collectors/collectors.html.twig', [
            "product" => $product
        ]);
    }

    /**
     * @Route ("/collector/{id<\d+>}", name="collector") 
     */
    public function collector($id)
    {
        $collector = $this->getDoctrine()->getRepository(Product::class)->find($id);
        return $this->render('pogsite/collectors/collector.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @Route ("/terms", name="terms") 
     */
    public function terms()
    {
        return $this->render('/terms.html.twig');
    }

    /**
     * @Route ("/test", name="test") 
     */
    public function test()
    {
        $collector = $this->getDoctrine()->getRepository(Product::class)->test();
        return $this->render('/php/test.php', [
            'product' => $product
        ]);
    }

    /**
     * @Route ("/testing", name="testing") 
     */
    public function testing()
    {
        return $this->render('/testing/test.html');
    }
}
