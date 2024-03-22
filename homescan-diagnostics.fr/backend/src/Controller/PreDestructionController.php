<?php

namespace App\Controller;

use App\Entity\DPAD;
use App\Repository\DPADRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreDestructionController extends AbstractController
{
    #[Route('/pre/destruction', name: 'app_pre_destruction')]
    public function index(DPADRepository $DPADRepository): JsonResponse
    {
        $DPAD = $DPADRepository->find(1);
        if(!$DPAD){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DPAD->getTitle(),
            'text' => $DPAD->getText()
        ];
            
            
        return $this->json($data);
    }
}

