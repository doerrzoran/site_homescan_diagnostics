<?php

namespace App\Controller;

use App\Entity\CREP;
use App\Entity\Lead;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CREPUpdateController extends AbstractController
{
    #[Route('/c/r/e/p/update', name: 'app_c_r_e_p_update', methods: ['POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        // Assuming you want to update title, text, message, and image
        $title = $data['title'] ?? null;
        $text = $data['text'] ?? null;
        
        $entityManager->beginTransaction();

        $dta = $entityManager->getRepository(Lead::class)->find(1);


        // Update the dta entity
        if ($title !== null) {
            $dta->setTitle($title);
        }
        if ($text !== null) {
            $dta->setText($text);
        }

        try {

            $entityManager->flush(); // Save changes to the database

            // Commit transaction
            $entityManager->commit();
            
            return $this->json(['message' => $title]);
        } catch (\Exception $e) {
            // Rollback transaction if an exception occurs
            $entityManager->rollback();
            
            return $this->json(['error' => 'An error occurred while saving changes'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
