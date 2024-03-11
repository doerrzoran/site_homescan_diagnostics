<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class GazController extends AbstractController
{
    #[Route('/gaz', name: 'app_gaz')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Etat de l’installation gaz',
            'text' => "L’installation gaz fait partie des points sensibles d’un logement.
            Toute défaillance peut en effet avoir des conséquences dramatiques aussi bien sur le bâtiment que sur ses occupants.
            Un propriétaire projetant de mettre en vente ou en location un bien immobilier dont l’installation gaz a plus de 15 ans doit donc obligatoirement faire appel à un professionnel certifié afin d’obtenir un état de l’installation gaz.
            Ce contrôle permet en effet de s’assurer que les éléments clés de l’équipement, comme l’appareil, les raccords et les tuyaux, sont dans un état satisfaisant et ne présentent pas de danger.
            Le diagnostiqueur doit également vérifier la ventilation du local d’installation.
            Le renouvellement de l’état de l’installation gaz doit se faire tous les 3 ans pour la mise en vente d’un logement et tous les 6 ans pour sa mise en location.
            ",
        ]);
    }
}
