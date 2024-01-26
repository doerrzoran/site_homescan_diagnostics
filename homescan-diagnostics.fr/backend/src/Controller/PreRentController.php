<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreRentController extends AbstractController
{
    #[Route('/pre/rent', name: 'app_pre_rent')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics avant location',
        ]);
    }
}
