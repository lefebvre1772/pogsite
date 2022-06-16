<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProdutController extends AbstractController
{
    #[Route('/produt', name: 'app_produt')]
    public function index(): Response
    {
        return $this->render('produt/index.html.twig', [
            'controller_name' => 'ProdutController',
        ]);
    }
}
