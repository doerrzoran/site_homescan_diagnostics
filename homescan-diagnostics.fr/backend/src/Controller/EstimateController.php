<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EstimateController extends AbstractController
{
    #[Route('/estimate', name: 'app_estimate')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'demander un devis',        
        ]);
    }
}
