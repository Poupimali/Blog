<?php
// src/Controller/BlogController.php
namespace App\Controller;

use phpDocumentor\Reflection\Location;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_index")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'owner' => 'Malika',
        ]);
    }

    /**
     * @Route("/blog/show/{slug}", name="show_article", methods={"GET"})
     */

    public function show($slug)
    {
        $regex = '/^[a-z0-9\-]+/';
        if (preg_match($regex, $slug)) {
            $slug = str_replace('-', ' ', $slug);
            $slug = ucwords($slug, " ");
        }
        return $this->render('blog/show.html.twig', ['slug' => $slug]);
    }

    /**
     * @Route("/blog/show/", name="show_article", methods={"GET"})
     */

    public function show1()
    {
        $slug = "Article Sans Nom";
        return $this->render('blog/show.html.twig', ['slug' => $slug]);
    }

}