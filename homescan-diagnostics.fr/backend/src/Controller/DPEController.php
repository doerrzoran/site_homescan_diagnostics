<?php

namespace App\Controller;

use App\Repository\DPERepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DPEController extends AbstractController
{
    #[Route('/d/p/e', name: 'app_d_p_e')]
    public function index(DPERepository $DPERepository): JsonResponse
    {
        $DPE = $DPERepository->find(1);
        if(!$DPE){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DPE->getTitle(),
            'text' => $DPE->getText()
        ];
            
            
        return $this->json($data);
    }
}
