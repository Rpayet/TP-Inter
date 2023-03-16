<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request): Response
    {
        return $this->render('search/index.html.twig', [
            'search' => $request->get('search'),
        ]);
    }

    #[Route('/search/show', name: 'app_search_show')]
    public function show(Request $request): Response
    {
        return $this->render('search/show.html.twig',[
            'result' => $request->get('search'),
        ]);
    }

}
