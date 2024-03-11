<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MissionsController extends AbstractController
{
    #[Route('/missions', name: 'app_missions')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Nos missions',
            'text' => 'HOMESCAN DIAGNOSTICS s’adresse aussi bien aux professionnels (B2B), qu’aux particuliers (B2C), pour les missions suivantes:\n
            -	Repérages Amiante et Plomb avant démolition ou avant travaux\n
            -	Diagnostics en parties communes de copropriété.\n
            -	Diagnostics techniques obligatoires avant vente ou mise en location de biens.\n
                Il s’agit, selon leur type, année de construction et localisation, des missions suivantes : CREP / Amiante / Termites / Electricité / Gaz / Mesurage / ERP 
            -	Audit énergétique en maison individuelle\n
            Zones d’intervention :\n
            -	L’essentiel des chantiers se déroule en Ile-de-France, Paris et petite couronne principalement. Selon l’importance de la mission, ce périmètre peut être étendu.\n
            ',
        ]);
    }
}
