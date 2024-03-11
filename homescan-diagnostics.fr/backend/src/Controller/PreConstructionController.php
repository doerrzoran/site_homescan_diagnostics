<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreConstructionController extends AbstractController
{
    #[Route('/pre/construction/lead', name: 'app_pre_construction')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'le diagnostic plomb avant travaux (DPAT) ',
            'text' => "Contrairement au CREP, qui concerne les bâtiments édifiés avant 1949,\n le diagnostic plomb avant travaux (DPAT) n’est soumis à aucune date de construction.\n La recherche d’éléments contenant du plomb est étendue aux éléments en plomb pur (canalisations, solins, etc). A titre indicatif,\n l’interdiction d’emploi du plomb dans les canalisations date de 1994.\n De même, contrairement au CREP qui détermine un seuil de concentration de 1mg/cm², au-delà duquel un élément est considéré comme contenant du plomb, le DPAT ne fixe aucun seuil limite.",
        ]);
    }
}
