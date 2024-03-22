<?php

namespace App\Controller;

use App\Entity\Society;
use App\Repository\SocietyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class SocietyController extends AbstractController
{
    #[Route('/society', name: 'app_society')]
    public function index(SocietyRepository $societyRepository): JsonResponse
    {
        $society = $societyRepository->find(1);
        if(!$society){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $society->getTitle(),
            'text' => $society->getText()
        ];
            
            
        return $this->json($data);
    }
}
