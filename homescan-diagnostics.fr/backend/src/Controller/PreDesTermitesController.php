<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreDesTermitesController extends AbstractController
{
    #[Route('/pre/des/termites', name: 'app_pre_des_termites')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'un diagnostics termites avant démolition ',
            'text' => "Dans les zones concernées par un arrêté Termites, un diagnostics termites avant démolition peut être exigé par le service d’urbanisme de la commune.\n Le professionnel inspectera tant les ouvrages en place que les gravats.\n En cas d’infestation, il informera le donneur de ses obligations (déclaration en mairie, incinération sur place des déchets infestés, etc.)",
        ]);
    }
}
