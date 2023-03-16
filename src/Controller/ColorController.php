<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorController extends AbstractController
{

    #[Route('/color', name: 'app_color')]
    public function index(): Response
    {
        return $this->render('color/index.html.twig', [
            'colors' => ['blue', 'red'],
        ]);
    }

    #[Route('/color/{color}', name: 'app_show_color')]
    public function show($color): Response
    {
        return $this->render('color/show.html.twig', [
            'color' => $color,
        ]);
    }
}

