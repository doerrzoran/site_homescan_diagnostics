<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(): JsonResponse
    {
        return $this->json([
            'mail' => 'contact@homescan-diagnostics.fr',
            'phoneNumber' => '0609485183',
        ]);
    }
}
