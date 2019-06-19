<?php
// src/Controller/BlogController.php
namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Article;
use App\Entity\Category;
use App\Form\ArticleSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response; // Objet inclus dans symfony, va gérer les requetes
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("/blog")
 *
 */


class BlogController extends AbstractController
{
    /**
     * Show all row from article's entity
     *
     * @Route("/", name="blog_index")
     * @return Response A response instance
     */

    public function index(Request $request): Response
    {
        $form = $this->createForm(ArticleSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();
        }

        //afficher les 5 derniers par ordre decroissant
        $articles = $this->getDoctrine()
            ->getManager()
            ->getRepository(Article::class)
            ->findBy([],['id'=>'DESC'],5,0);

        if (!$articles) {
            throw $this->createNotFoundException(
                'No article found in article\'s table.'
            );
        }

        return $this->render('blog/index.html.twig', [
            'articles' => $articles,
            'form' => $form->createView()
        ]);
    }

    /**
     * Getting a article with a formatted slug for title
     *
     * @param string $slug The slugger
     *
     * @Route("/{slug<^[a-z0-9-]+$>}",
     *     defaults={"slug" = null},
     *     name="blog_show")
     *  @return Response A response instance
     */
    public function show(?string $slug) : Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException("No slug has been sent to find an article in article's table.");
        }

        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );

        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findOneBy(['title' => mb_strtolower($slug)]);

        if (!$article) {
            throw $this->createNotFoundException(
                "No article with '.$slug.' title, found in article's table."
            );
        }

        $category = $article->getCategory();

        return $this->render(
            'blog/show.html.twig',
            [
                'article' => $article,
                'slug' => $slug,
                'category' => $category,
             ]
        );
    }

    /**
     * Getting category with all articles
     *
     * @Route("/category/{name}", name="show_category")
     *
     * @return Response A response instance
     */

    public function showByCategory(Category $category){
        /*$category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $categoryName]);

        $categoryArticle = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findBy(['category' => $category], ['id' => 'DESC'], 3 );*/

        $articles = $category->getArticles();


        return $this->render(
            'blog/category.html.twig',
            [
                'articles' => $articles,
                'category' => $category
            ]
        );
    }

    /**
     * Getting tag with all articles
     *
     * @Route("/tag/{name}", name="show_tag")
     *
     * @return Response A response instance
     */

    public function showByTag(Tag $tag){

        $articles = $tag->getArticles();


        return $this->render(
            'blog/tag.html.twig',
            [
                'articles' => $articles,
                'tag' => $tag
            ]
        );
    }

}
