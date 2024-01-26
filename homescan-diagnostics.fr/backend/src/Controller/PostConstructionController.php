<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PostConstructionController extends AbstractController
{
    #[Route('/post/construction', name: 'app_post_construction')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics après travaux',
        ]);
    }
}
