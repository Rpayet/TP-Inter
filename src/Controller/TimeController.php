<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimeController extends AbstractController
{
    #[Route('/time', name: 'app_time')]
    public function index(): Response
    {
        
        return $this->render('time/index.html.twig');
    }

    #[Route('/time/now', name: 'app_show')]
    public function show(): Response
    {

        $timer = new DateTime();

        return $this->render('time/show.html.twig', [
            'timer' => $timer->format('d/m/Y H:i:m'),
        ]);
    }
}
