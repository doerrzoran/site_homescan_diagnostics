<?php

namespace App\Controller;

use App\Entity\RAAT;
use App\Repository\RAATRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreConstructionAsbesosController extends AbstractController
{
    #[Route('/pre/construction/asbesos', name: 'app_pre_construction_asbesos')]
    public function index(RAATRepository $RAATRepository): JsonResponse
    {
        $RAAT = $RAATRepository->find(1);
        if(!$RAAT){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $RAAT->getTitle(),
            'text' => $RAAT->getText()
        ];
            
            
        return $this->json($data);
    }
}
