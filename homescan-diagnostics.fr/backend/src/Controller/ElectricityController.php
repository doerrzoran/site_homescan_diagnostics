<?php

namespace App\Controller;

use App\Entity\Electricity;
use App\Repository\ElectricityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ElectricityController extends AbstractController
{
    #[Route('/electricity', name: 'app_electricity')]
    public function index(ElectricityRepository $electricityRepository): JsonResponse
    {
        $electricity = $electricityRepository->find(1);
        if(!$electricity){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $electricity->getTitle(),
            'text' => $electricity->getText()
        ];
            
            
        return $this->json($data);
    }
}
