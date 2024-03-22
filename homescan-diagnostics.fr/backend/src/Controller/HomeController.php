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
        $homePage = $homePageRepository->find(1);
        if(!$homePage){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $homePage->getTitle(),
            'subtitle' => $homePage->getSubtitle(),
            'message' => $homePage->getMessage(),
            'image' => $homePage->getImage(),
        ];
            
            
        return $this->json($data);
    }
}


 