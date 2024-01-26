<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class InterventionSectorController extends AbstractController
{
    #[Route('/intervention/sector', name: 'app_intervention_sector')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Secteur d\'intervention',
        ]);
    }
}
