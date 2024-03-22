<?php

namespace App\Controller;

use App\Repository\DTARepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DTAController extends AbstractController
{
    #[Route('/d/t/a', name: 'app_d_t_a')]
    public function index(DTARepository $DTARepository): JsonResponse
    {
        $DTA = $DTARepository->find(1);
        if(!$DTA){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DTA->getTitle(),
            'text' => $DTA->getText()
        ];
            
            
        return $this->json($data);
    }
}
