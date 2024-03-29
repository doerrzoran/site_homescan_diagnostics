<?php

namespace App\Controller;

use App\Entity\HomePage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeUpdateController extends AbstractController
{

    #[Route('/home/update', name: 'update_homepage', methods: ['POST'])]
    public function updateHomePage(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        // Assuming you want to update title, subtitle, message, and image
        $title = $data['title'] ?? null;
        $subtitle = $data['subtitle'] ?? null;
        $message = $data['message'] ?? null;
        $image = $data['image'] ?? null;
        
        $entityManager->beginTransaction();

        $homePage = $entityManager->getRepository(HomePage::class)->find(1);


        // Update the HomePage entity
        if ($title !== null) {
            $homePage->setTitle($title);
        }
        if ($subtitle !== null) {
            $homePage->setSubtitle($subtitle);
        }
        if ($message !== null) {
            $homePage->setMessage($message);
        }
        if ($image !== null) {
            $homePage->setImage($image);
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
