<?php

namespace App\Controller;

use App\Entity\Pogs;
use App\Entity\Vintages;
use App\Entity\Collectors;
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
        $pogs = $this->getDoctrine()->getRepository(pogs::class)->find($id);
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
        $pogs = $this->getDoctrine()->getRepository(Pogs::class)->findAll();
        // dd($pogs);
        return $this->render('pogsite/pogs/pogs2.html.twig', [
            "pogs" => $pogs
        ]);
    }

    /**
     * @Route ("/pog/{id<\d+>}", name="pog", priority=1) 
     */
    public function pog($id)
    {
        $pog = $this->getDoctrine()->getRepository(Pogs::class)->find($id);
        return $this->render('pogsite/pogs/pog.html.twig', [
            'pog' => $pog
        ]);
    }

    /**
     * @Route ("vintages", name="vintages") 
     */
    public function vintages()
    {
        $vintages = $this->getDoctrine()->getRepository(Vintages::class)->findAll();
        // dd($vintages);
        return $this->render('pogsite/vintages/vintages.html.twig', [
            "vintages" => $vintages
        ]);
    }

    /**
     * @Route ("/vintage/{id<\d+>}", name="vintage") 
     */
    public function vintage($id)
    {
        $vintage = $this->getDoctrine()->getRepository(vintages::class)->find($id);
        return $this->render('pogsite/vintages/vintage.html.twig', [
            'vintage' => $vintage
        ]);
    }

    /**
     * @Route ("collectors", name="collectors") 
     */
    public function collectors()
    {
        $collectors = $this->getDoctrine()->getRepository(Collectors::class)->findAll();
        // dd($collectors);
        return $this->render('pogsite/collectors/collectors.html.twig', [
            "collectors" => $collectors
        ]);
    }

    /**
     * @Route ("/collector/{id<\d+>}", name="collector") 
     */
    public function collector($id)
    {
        $collector = $this->getDoctrine()->getRepository(Collectors::class)->find($id);
        return $this->render('pogsite/collectors/collector.html.twig', [
            'collector' => $collector
        ]);
    }
}
