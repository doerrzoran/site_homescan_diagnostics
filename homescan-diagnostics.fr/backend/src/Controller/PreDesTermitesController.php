<?php

namespace App\Controller;

use App\Repository\DTADRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreDesTermitesController extends AbstractController
{
    #[Route('/pre/des/termites', name: 'app_pre_des_termites')]
    public function index(DTADRepository $DTADRepository): JsonResponse
    {
        $DTAD = $DTADRepository->find(1);
        if(!$DTAD){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $DTAD->getTitle(),
            'text' => $DTAD->getText()
        ];
            
            
        return $this->json($data);
    }
}
