<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(Request $request): Response
    {

        // dump($request); // WHere is that IP ?...

        // Web Search : "symfony where to find the clien ip with request"
        $ip = $request->getClientIp(); // Find on stack overflow... Mais toujours pas vu où trouver l'ip dans le dump.

        return $this->render('client/index.html.twig',[
            'ip' => $ip,
        ]);
    }
}
