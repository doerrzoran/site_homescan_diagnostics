<?php

namespace App\Controller;

use App\Entity\DPAT;
use App\Repository\DPATRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreConstructionController extends AbstractController
{
    #[Route('/pre/construction/lead', name: 'app_pre_construction')]
    public function index(DPATRepository $DPATRepository): JsonResponse
    {
        $DPAT = $DPATRepository->find(1);
        if(!$DPAT){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DPAT->getTitle(),
            'text' => $DPAT->getText()
        ];
            
            
        return $this->json($data);
    }
}
