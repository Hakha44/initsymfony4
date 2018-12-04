<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\ArticleSearchType;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
//    /**
//     * @Route("/form")
//     */
//    public function index()
//    {
//        $category = new Category();
//        $form = $this->createForm(CategoryType::class, $category);
//
//        return $this->render(
//            'form/index.html.twig', [
//                'form' => $form->createView(),
//            ]
//        );
//    }

    /**
     * @Route("category", name="category")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();
        if (!$categories) {
            throw $this->createNotFoundException(
                'No article found in article\'s table.'
            );
        }
        return $this->render(
            '/category/index.html.twig',
            ['categories' => $categories]
        );
    }
}
