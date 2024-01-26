<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AssetsController extends AbstractController
{
    #[Route('/assets', name: 'app_assets')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Nos atouts',
        ]);
    }
}
