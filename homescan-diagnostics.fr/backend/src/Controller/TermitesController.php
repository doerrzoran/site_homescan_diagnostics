<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class TermitesController extends AbstractController
{
    #[Route('/termites', name: 'app_termites')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Welcome to your new controller!',
            'text' => "L’Ile de France est en partie concernée par les termites, même si le niveau d’infestation reste globalement faible. La ville de Paris, l’ensemble des Hauts de Seine sont soumis à arrêté. Concernant les autres départements de la région, seules certaines communes sont concernées.
            Ainsi, en fonction de l’adresse du bien, un diagnostic termites sera éventuellement nécessaire. Ces insectes xylophages peuvent générer des dégâts considérables sur les parties en bois des bâtiments infestés, et la situation peut évoluer rapidement.
            Ce diagnostic termites a une durée de validité limitée à 6 mois.
            ",
        ]);
    }
}
