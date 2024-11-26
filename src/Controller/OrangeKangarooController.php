<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrangeKangarooController extends AbstractController
{
    #[Route('/orange/kangaroo', name: 'app_orange_kangaroo')]
    public function index(): Response
    {
        return $this->render('orange_kangaroo/index.html.twig', [
            'controller_name' => 'OrangeKangarooController',
        ]);
    }
}
