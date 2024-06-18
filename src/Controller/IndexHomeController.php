<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexHomeController extends AbstractController
{
    #[Route('/index/Home', name: 'app_index_home')]
    public function index(): Response
    {
        return $this->render('index_home/index.html.twig', [
            'controller_name' => 'IndexHomeController',
        ]);
    }
}
