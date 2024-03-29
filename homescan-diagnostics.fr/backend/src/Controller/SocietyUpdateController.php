<?php

namespace App\Controller;

use App\Entity\Society;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SocietyUpdateController extends AbstractController
{
    #[Route('/society/update', name: 'app_society_update')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        // Assuming you want to update title, text, message, and image
        $title = $data['title'] ?? null;
        $text = $data['text'] ?? null;
        
        $entityManager->beginTransaction();

        $society = $entityManager->getRepository(Society::class)->find(1);


        // Update the society entity
        if ($title !== null) {
            $society->setTitle($title);
        }
        if ($text !== null) {
            $society->setText($text);
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
