<?php

namespace App\Controller;

use App\Repository\GazRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class GazController extends AbstractController
{
    #[Route('/gaz', name: 'app_gaz')]
    public function index(GazRepository $gazRepository): JsonResponse
    {
        $gaz = $gazRepository->find(1);
        if(!$gaz){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $gaz->getTitle(),
            'text' => $gaz->getText()
        ];
            
            
        return $this->json($data);
    }
}
