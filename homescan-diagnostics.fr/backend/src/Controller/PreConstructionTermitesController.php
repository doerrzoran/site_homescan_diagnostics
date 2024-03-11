<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreConstructionTermitesController extends AbstractController
{
    #[Route('/pre/construction/termites', name: 'app_pre_construction_termites')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Diagnostics termites avant travaux',
            'text' => "Dans les zones concernées par un arrêté Termites,\n un diagnostics termites avant travaux peut être demandé.\n Le professionnel inspectera tant les ouvrages en place que les gravats. En cas d’infestation,\n il informera le donneur de ses obligations (déclaration en mairie, incinération sur place des déchets infestés, etc.)",
        ]);
    }
}
