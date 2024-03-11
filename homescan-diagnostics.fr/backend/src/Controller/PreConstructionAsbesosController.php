<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreConstructionAsbesosController extends AbstractController
{
    #[Route('/pre/construction/asbesos', name: 'app_pre_construction_asbesos')]
    public function index(): JsonResponse
    {
        return $this->json([
            'titre' => 'Le repérage amiante avant travaux (RAAT) ',
            'text' => "Le repérage amiante avant travaux (RAAT) concerne les bâtiments dont le permis de construire est antérieur au 1er juillet 1997.\n 
            Comme pour la mission de diagnostic amiante avant démolition, le nombre d’analyses ne peut pas avec connu avec certitude à l’avance.\n Il ne peut être qu’estimé en début de chantier, lors de l’établissement du devis.\n Cependant, des centaines de missions de RAAT ayant été réalisées par HOMESCAN DIAGNOSTICS,\n l’expérience permet une estimation du nombre d’analyses assez précise dans une grande majorité des cas.
            ",
        ]);
    }
}
