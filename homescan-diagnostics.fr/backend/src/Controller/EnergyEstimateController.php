<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class EnergyEstimateController extends AbstractController
{
    #[Route('/energy/estimate', name: 'app_energy_estimate')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Audit énergétique en maison individuelle',
            'text' => "La loi Climat et Résilience a instauré dans le domaine des transactions divers outils de lutte contre les logements énergivores.
            L’obligation de faire réaliser un audit énergétique en maison individuelle, plusieurs fois repoussée, est actuellement programmée pour le 1er avril 2023.
            Dans des contextes énergétique et climatique et plus en plus tendus, l’objectif est de supprimer à terme les logements considérés comme des « passoires thermiques ».
            Dans un premier temps, cet audit énergétique réglementaire concernera toute vente de maison individuelle ou bien en monopropriété, classée F ou G par le DPE. 
            En 2025, il devrait s’appliquer aux ventes des maisons classées en lettre E, puis en 2034, à celles des maisons classées en lettre D.
            Fonctionnant avec le même moteur de calcul que le DPE, il se distingue de ce dernier par un approfondissement poussé des mesures à mettre en place afin d’améliorer la performance du bien. 
            Différents scénarios sont envisagés, selon le degré de performance à atteindre : les spécificités du bâti sont plus précisément prises en compte ;
            les scénarios de travaux envisagés sont accompagnés de chiffrages plus concrets, ainsi que des dispositifs des aides financières éventuellement disponibles. 
            Une telle mesure a pour objectif d’encourager le futur acquéreur à réaliser des travaux de rénovation énergétique et surtout d’en intégrer le coût lors du plan de financement, dès son projet d’acquisition.
            L’audit énergétique réglementaire, valable cinq ans, devra être remis à l’acquéreur potentiel dès la première visite du bien.
            ",
        ]);
    }
}
