<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Service\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     *
     */
    public function index(ArticleRepository $articleRepository, SessionInterface $session): Response
    {
        $articles = $articleRepository->findAllWithCategoriesAndTags();

        if (!$session->has('total')) {
            $session->set('total', 0); // if total doesn’t exist in session, it is initialized.
        }

        $total = $session->get('total'); // get actual value in session with ‘total' key.

        return $this->render('article/index.html.twig', ['articles' => $articles, 'total' => $total]);
    }

    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     * @param Request $request
     * @param Slugify $slugify
     * @param \Swift_Mailer $mailer
     * @return Response
     * @IsGranted("ROLE_AUTHOR", statusCode=404, message="Vous n'avez pas accés à cette partie du site")
     */
    public function new(Request $request, Slugify $slugify, \Swift_Mailer $mailer): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request); // hydrate automatiquement l'objet Article = le met à jour


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $article->setSlug($slugify->generate($article->getTitle()));
            $author = $this->getUser();
            $article->setAuthor($author);

            $entityManager->persist($article);
            $entityManager->flush();
            $this->addFlash('success', 'L\'article a bien été créé.');

            $message = (new \Swift_Message('Ouh lala enfin un nouvel article !'))
                ->setFrom($this->getParameter('mailer_from'))
                ->setTo($this->getParameter('mailer_from'))
                ->setBody(
                    $this->render('mail/email_content.html.twig',
                    ['article' => $article,
                        'name' => $this->getParameter('mailer_from')]
                ),
                    'text/html'
                );
            $mailer->send($message);

            $this->addFlash('success', 'Le message est bien envoyé');

            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{slug}", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    //     * @ParamConverter("article", class="App\Entity\Article")
    /**
     * @Route("/edit/{id}", name="article_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Article $article
     * @param Slugify $slugify
     * @return Response
     */
    public function edit(Request $request, Article $article, Slugify $slugify): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($this->isGranted('ROLE_ADMIN') or ($article->getAuthor() === $this->getUser())) {

            if ($form->isSubmitted() && $form->isValid()) {
                $article->setSlug($slugify->generate($article->getTitle()));
                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success', 'L\'article a bien été modifié.');

                return $this->redirectToRoute('article_index', [
                    'slug' => $article->getSlug(),
                ]);
            }
        } else {
            throw $this->createAccessDeniedException();
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="article_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
            $this->addFlash('danger', 'L\'article a bien été supprimé.');
        }

        return $this->redirectToRoute('article_index');
    }
}
