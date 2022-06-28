<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(ArticleRepository $repo): Response
    {
        // $repo = $this->getDoctrine->getRepository(Article::classe);
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    #[Route('/blog', name: 'blog')]
    public function blog(ArticleRepository $repo): Response
    {
        // $repo = $this->getDoctrine->getRepository(Article::classe);
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     *@route ("/blog_show", name="blog_show")
     **/
    public function blog_show()
    {
        // $repo = $this->getDoctrine->getRepository(Article::classe);
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     *@route ("/home", name="home")
     **/
    public function home()
    {
        // $repo = $this->getDoctrine->getRepository(Article::classe);
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route ("/blog_create" , name="blog_create")
     * @Route ("/blog_create" , name="security_login")
     */
    public function blog_create()
    {
        return $this->render('blog/create.html.twig');
    }
}
