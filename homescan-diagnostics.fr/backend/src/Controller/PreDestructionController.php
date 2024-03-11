<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PreDestructionController extends AbstractController
{
    #[Route('/pre/destruction', name: 'app_pre_destruction')]
    public function index(): JsonResponse
    {
        return new JsonResponse([
            'title' => 'Diagnostics avant démolition',
            'text' => "Un projet de démolition nécessite des investigations préalables.\nLa complexité et le coût d’une telle opération peuvent être très fortement 
            augmentés en cas, par exemple, de présence avérée d’amiante.\nLe diagnostic amiante avant démolition (DAAD) concerne les bâtiments 
            dont le permis de construire est antérieur au 1er juillet 1997.\n 
            La totalité des ouvrages ou parties d’ouvrage est inspectée et sondée.\n 
            Le nombre d’analyses qui s’avèreront in fine nécessaires ne peut être qu’estimé en début de chantier, lors de l’établissement du devis.\n 
            Seules les investigations approfondies et sondages permettront de 
            déterminer leur quantité, selon l’homogénéité ou non des matériaux et produits rencontrés sur site.\nContrairement au CREP, qui concerne les bâtiments édifiés avant 1949, 
            le diagnostic plomb avant démolition (DPAD) n’est soumis à aucune date de construction.\n 
            La recherche d’éléments contenant du plomb est étendue aux éléments en plomb pur (canalisations, solins, etc).\n 
            A titre indicatif, l’interdiction d’emploi du plomb dans les canalisations date de 1994.\n 
            De même, contrairement au CREP qui détermine un seuil de concentration de 1mg/cm², 
            au-delà duquel un élément est considéré comme contenant du plomb, le DPAD ne fixe aucun seuil limite.\n 
            Dans les zones concernées par un arrêté Termites, un diagnostics termites avant démolition 
            peut être exigé par le service d’urbanisme de la commune.\n Le professionnel inspectera tant 
            les ouvrages en place que les gravats.\n En cas d’infestation, il informera le donneur de ses obligations 
            (déclaration en mairie, incinération sur place des déchets infestés, etc.\n)"
        ]);
    }
}

