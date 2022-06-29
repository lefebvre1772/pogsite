<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request): Response
    {
        // dd($request->query->get('search'));
        // cts = $this->getDoctrine()->getRepository(Product::class)->findAll();

        // $products =  $this->getDoctrine()->getRepository(Product::class)->findBy(
        //     ['name' => 'Pog 1']
        // );
        // $foo = $_GET[search];
        // $request = $this;
        // dump($request);
        $products = $this->getDoctrine()->getRepository(Product::class)->search('%' . $request->query->get('search') . '%');
        // dump($products);
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
            'products' => $products
        ]);
    }
}
