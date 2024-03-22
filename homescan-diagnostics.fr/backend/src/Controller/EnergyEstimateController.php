<?php

namespace App\Controller;

use App\Entity\Energy;
use App\Repository\EnergyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class EnergyEstimateController extends AbstractController
{
    #[Route('/energy/estimate', name: 'app_energy_estimate')]
    public function index(EnergyRepository $energyRepository): JsonResponse
    {
        $energy = $energyRepository->find(1);
        if(!$energy){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $energy->getTitle(),
            'text' => $energy->getText()
        ];
            
            
        return $this->json($data);
    }
}
