<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MissionsController extends AbstractController
{
    #[Route('/missions', name: 'app_missions')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Nos missions',
        ]);
    }
}
