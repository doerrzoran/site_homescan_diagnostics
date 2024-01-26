<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CondominiumController extends AbstractController
{
    #[Route('/condominium', name: 'app_condominium')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics en copropriété',
        ]);
    }
}
