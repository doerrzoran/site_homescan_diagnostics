<?php

namespace App\Controller;

use App\Entity\InterventionSectors;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InterventionUpdateController extends AbstractController
{
    #[Route('/intervention/update', name: 'app_intervention_update', methods: ['POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        // Assuming you want to update title, text, message, and image
        $title = $data['title'] ?? null;
        $text = $data['text'] ?? null;
        
        $entityManager->beginTransaction();

        $intervention = $entityManager->getRepository(InterventionSectors::class)->find(1);


        // Update the intervention entity
        if ($title !== null) {
            $intervention->setTitle($title);
        }
        if ($text !== null) {
            $intervention->setText($text);
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
