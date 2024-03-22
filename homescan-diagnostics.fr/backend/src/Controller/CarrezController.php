<?php

namespace App\Controller;

use App\Entity\Carrez;
use App\Repository\CarrezRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CarrezController extends AbstractController
{
    #[Route('/carrez', name: 'app_carrez')]
    public function index(CarrezRepository $carrezRepository): JsonResponse
    {
        $carrez = $carrezRepository->find(1);
        if(!$carrez){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $carrez->getTitle(),
            'text' => $carrez->getText()
        ];
            
            
        return $this->json($data);
    }
}
