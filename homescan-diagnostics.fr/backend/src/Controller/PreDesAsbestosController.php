<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PreDesAsbestosController extends AbstractController
{
    #[Route('/pre/des/asbestos', name: 'app_pre_des_asbestos')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Le diagnostic amiante avant démolition (DAAD)',
            'text' => "Le diagnostic amiante avant démolition (DAAD) concerne les bâtiments dont le permis de construire est antérieur au 1er juillet 1997.\n La totalité des ouvrages ou parties d’ouvrage est inspectée et sondée. 
            Le nombre d’analyses qui s’avèreront in fine nécessaires ne peut être qu’estimé en début de chantier,\n lors de l’établissement du devis.\n Seules les investigations approfondies et sondages permettront de déterminer leur quantité,\n selon l’homogénéité ou non des matériaux et produits rencontrés sur site.
            ",
        ]);
    }
}
