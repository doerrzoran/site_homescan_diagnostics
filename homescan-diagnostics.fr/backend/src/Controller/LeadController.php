<?php

namespace App\Controller;

use App\Entity\Lead;
use App\Repository\LeadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class LeadController extends AbstractController
{
    #[Route('/lead', name: 'app_lead')]
    public function index(LeadRepository $leadRepository): JsonResponse
    {
        $lead = $leadRepository->find(1);
        if(!$lead){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $lead->getTitle(),
            'text' => $lead->getText()
        ];
            
            
        return $this->json($data);
    }
}
