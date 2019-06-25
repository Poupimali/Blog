<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category_index")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("category/{id}", name="category_show")
     */
    public function showCategory(Category $category)
    {

        return $this->render('category/show.html.twig',
            ['category' => $category,
            ]);
    }

    /**
     * @Route("/add", name="add_category")
     * @return Response A response instance
     * @IsGranted("ROLE_ADMIN", statusCode=404, message="Vous n'avez pas accés à cette partie du site")
     */
    public function add(Request $request): Response
    {
        $category = new Category();

        $form = $this->createForm(
            CategoryType::class,
            $category,
            ['method' => Request::METHOD_GET]
        );

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('category_show',
                [ 'id' => $category->getId()]);
        }

        return $this->render('category/add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}