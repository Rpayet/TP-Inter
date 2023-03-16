<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    protected $items = [];

    public function __construct()
    {
        $this->items = [
            ['title' => 'Mug', 'text' => 'Disfrutar un buen café', 'publishedAt' => new DateTime(), 'author' => 'Billy'],
            ['title' => 'Chair', 'text' => 'Take a good sit', 'publishedAt' => new DateTime(), 'author' => 'Paul'],
            ['title' => 'Pillow', 'text' => 'Have a good naptime', 'publishedAt' => new DateTime(), 'author' => 'Franck'],
        ];
    }

    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'items' => $this->items,
        ]);
    }
}
