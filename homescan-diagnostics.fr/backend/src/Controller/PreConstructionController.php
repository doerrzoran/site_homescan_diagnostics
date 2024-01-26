<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreConstructionController extends AbstractController
{
    #[Route('/pre/construction', name: 'app_pre_construction')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics avant travaux',
        ]);
    }
}
