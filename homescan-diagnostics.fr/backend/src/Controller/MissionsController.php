<?php

namespace App\Controller;

use App\Entity\Missions;
use App\Repository\MissionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MissionsController extends AbstractController
{
    #[Route('/missions', name: 'app_missions')]
    public function index(MissionsRepository $missionsRepository): JsonResponse
    {
        $missions = $missionsRepository->find(1);
        if(!$missions){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $missions->getTitle(),
            'text' => $missions->getText()
        ];
            
            
        return $this->json($data);
    }
}
