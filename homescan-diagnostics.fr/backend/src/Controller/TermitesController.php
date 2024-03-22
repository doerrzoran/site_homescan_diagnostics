<?php

namespace App\Controller;

use App\Entity\Termites;
use App\Repository\TermitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class TermitesController extends AbstractController
{
    #[Route('/termites', name: 'app_termites')]
    public function index(TermitesRepository $termitesRepository): JsonResponse
    {
        $termites = $termitesRepository->find(1);
        if(!$termites){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $termites->getTitle(),
            'text' => $termites->getText()
        ];
            
            
        return $this->json($data);
    }
}
