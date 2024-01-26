<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'HomeScan Diagnostics : “Expertise, Fiabilité, Sérénité."',
            'subTitle' => 'Effectue des missions dans toute l\'ile de france',
            'message' => 'etes vous un particulier ou un professionel ? homescan-Diagnostics assure tout types de missions:...',
        ]);
    }
}
