<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ERPController extends AbstractController
{
    #[Route('/e/r/p', name: 'app_e_r_p')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Wétat des risques et pollutions (ERP)',
            'text' => 'Tout dossier de vente ou de location de bien, y compris un terrain nu, doit ainsi contenir un état des risques et pollutions (ERP).
            Ce document permet à l’acheteur et au locataire de prendre connaissance de l’ensemble des risques d’origines technologique et naturelle liés à l’environnement du bien.
            De plus, si le bien est situé dans une zone d’exposition aux bruits des aéroports, le bailleur et le vendeur doivent ajouter au DDT un état des nuisances sonores et aériennes (ENSA), ou plan d’exposition au bruit (PEB).
            Les arrêtés et documents cartographiques utilisés sont régulièrement remis à jour, aussi la durée de validité de ce document est limitée à 6 mois.
            ',
        ]);
    }
}
