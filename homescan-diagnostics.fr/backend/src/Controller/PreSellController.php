<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreSellController extends AbstractController
{
    #[Route('/pre/sell', name: 'app_pre_sell')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics avant vente',
        ]);
    }
}
