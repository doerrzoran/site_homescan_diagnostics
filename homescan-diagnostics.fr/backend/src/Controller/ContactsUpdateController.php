<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactsUpdateController extends AbstractController
{
    #[Route('/contacts/update', name: 'app_contacts_update', methods: ['POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        // Assuming you want to update mail, phoneNumber, message, and image
        $mail = $data['mail'] ?? null;
        $phoneNumber = $data['phoneNumber'] ?? null;
        
        $entityManager->beginTransaction();

        $contacts = $entityManager->getRepository(Contact::class)->find(1);


        // Update the contacts entity
        if ($mail !== null) {
            $contacts->setMail($mail);
        }
        if ($phoneNumber !== null) {
            $contacts->setPhoneNumber($phoneNumber);
        }

        try {

            $entityManager->flush(); // Save changes to the database

            // Commit transaction
            $entityManager->commit();
            
            return $this->json(['message' => 'update succesfull']);
        } catch (\Exception $e) {
            // Rollback transaction if an exception occurs
            $entityManager->rollback();
            
            return $this->json(['error' => 'An error occurred while saving changes'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }
}
