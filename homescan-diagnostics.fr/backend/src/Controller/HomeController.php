<?php

namespace App\Controller;

use App\Repository\HomePageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(HomePageRepository $homePageRepository): JsonResponse
    {
        // $homePage = $homePageRepository->findOneBy([]);

        // if(!$homePage){
        //     throw $this->createNotFoundException('...');
        // }
        
        return $this->json([
            'title' => 'page d\'accueil',
            'subTitle' => 'Effectue des missions dans toute l\'ile de france',
            'message' => 'etes vous un particulier ou un professionel ? homescan-Diagnostics assure tout types de missions:...',
            'image' => './images/test-image.jpg',
            
        ]);
    }
}
 