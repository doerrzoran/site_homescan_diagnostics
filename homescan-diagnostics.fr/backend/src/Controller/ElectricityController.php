<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ElectricityController extends AbstractController
{
    #[Route('/electricity', name: 'app_electricity')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Etat de l’installation électrique.',
            'text' => "Des installations électriques vétuste ou bricolées sont à l’origine de nombreux accidents tels qu’électrocutions ou incendies.
            Il est donc obligatoire de s’assurer de la sûreté d’une installation électricité de plus de 15 ans avant de mettre en vente ou en location un bien immobilier.
            Pour cela, le vendeur et le bailleur doivent faire appel à un professionnel certifié pour réaliser un état de l’installation électrique.
            Ce diagnostic obligatoire doit être fourni à tout acheteur et locataire.
            Le diagnostiqueur qui le réalise a pour mission de vérifier la présence et l’état des éléments de l’installation électrique qui concourent à sa sécurité : le tableau, les conducteurs, les prises de terre… La vérification du système électrique par un diagnostiqueur est à faire tous les 3 ans pour une mise en vente immobilière et tous les 6 ans pour une mise en location.
            ",
        ]);
    }
}
