<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreDestructionController extends AbstractController
{
    #[Route('/pre/destruction', name: 'app_pre_destruction')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics avant démolition',
        ]);
    }
}
