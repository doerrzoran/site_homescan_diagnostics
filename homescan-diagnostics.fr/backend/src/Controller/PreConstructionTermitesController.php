<?php

namespace App\Controller;

use App\Entity\DTAT;
use App\Repository\DTATRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreConstructionTermitesController extends AbstractController
{
    #[Route('/pre/construction/termites', name: 'app_pre_construction_termites')]
    public function index(DTATRepository $DTATRepository): JsonResponse
    {
        $DTAT = $DTATRepository->find(1);
        if(!$DTAT){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DTAT->getTitle(),
            'text' => $DTAT->getText()
        ];
            
            
        return $this->json($data);
    }
}
