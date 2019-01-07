<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category/{id}", name="category_show")*
     * @param Category $category
     */
    public function show(Category $category) :Response
    {
        return $this->render('category/index.html.twig', [
            'category'=>$category,
        ]);
    }
}
