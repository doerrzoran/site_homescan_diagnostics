<?php

namespace App\Controller;


use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(ContactRepository $contactRepository): JsonResponse
    {
       $contacts = $contactRepository->find(1);
        
       $data = [
            'mail' => $contacts->getMail(), 
            'phoneNumber' => $contacts->getPhoneNumber(),
        ];

        return $this->json($data);
    }
}
