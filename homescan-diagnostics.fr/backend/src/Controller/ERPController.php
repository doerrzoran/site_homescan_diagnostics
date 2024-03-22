<?php

namespace App\Controller;

use App\Entity\ERP;
use App\Repository\ERPRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ERPController extends AbstractController
{
    #[Route('/e/r/p', name: 'app_e_r_p')]
    public function index(ERPRepository $ERPRepository): JsonResponse
    {
        $ERP = $ERPRepository->find(1);
        if(!$ERP){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $ERP->getTitle(),
            'text' => $ERP->getText()
        ];
            
            
        return $this->json($data);
    }
}
