<?php


// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("blog/{slug}",
     *     requirements={"slug" = "^[a-z0-9-]+"},
     *     name="blog_slug")
     *
     * @param string $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show($slug = "Article Sans Titre")
    {
        $slugShow = str_replace('-',' ', $slug);
        $slugShow = ucwords($slugShow);
        return $this->render('blog/index.html.twig', ['slug' => $slugShow]);
    }
}


