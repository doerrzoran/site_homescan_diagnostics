<?php

namespace App\Controller;

use App\Repository\AsbestosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AsbestosController extends AbstractController
{
    #[Route('/asbestos', name: 'app_asbestos')]
    public function index(AsbestosRepository $asbestosRepository): JsonResponse
    {
        $asbestos = $asbestosRepository->find(1);
        if(!$asbestos){
            throw $this->createNotFoundException(('Home page not found'));
        }
        
        $data = [
            'title' => $asbestos->getTitle(),
            'text' => $asbestos->getText()
        ];
            
            
        return $this->json($data);
    }
}
