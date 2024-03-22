<?php

namespace App\Controller;

use App\Entity\DAAD;
use App\Repository\DAADRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreDesAsbestosController extends AbstractController
{
    #[Route('/pre/des/asbestos', name: 'app_pre_des_asbestos')]
    public function index(DAADRepository $DAADRepository): JsonResponse
    {
        $DAAD = $DAADRepository->find(1);
        if(!$DAAD){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DAAD->getTitle(),
            'text' => $DAAD->getText()
        ];
            
            
        return $this->json($data);
    }
}
