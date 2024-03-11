<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DTAController extends AbstractController
{
    #[Route('/d/t/a', name: 'app_d_t_a')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Le dossier technique amiante de l’immeuble (DTA) ',
            'text' => "Lors de la vente d’un lot de copropriété, le syndic transmet au notaire le dossier technique amiante de l’immeuble (DTA)\n si le permis de construire de celui-ci est antérieur au 1er juillet 1997.\n
            Le DTA est principalement constitué d’un rapport initial, permettant de localiser et d’évaluer l’état de conservation de certains matériaux ou produits amiantés (matériaux des listes A et B).\n Le DTA doit être mis à jour dès qu’un évènement survient sur les matériaux listés : retrait total ou partiel, encoffrage, altération, etc.\n
            Les propriétaires ou locataires de locaux à usage tertiaires (entreprises, administrations, etc.) doivent également tenir à jour un DTA des bâtiments qu’ils exploitent.\n
            Le CREP en parties communes localise les éléments contenant du plomb dans leur revêtement à une concentration supérieure au seuil de 1 mg/cm².\n Le syndicat des copropriétaires doit procéder à des travaux de remise en état si des éléments sont signalés comme dégradés (classe 3). Dans le cas contraire, il veille au maintien en bon état des revêtements positifs.\n
            Le syndic de copropriété est chargé de conserver et tenir à jour ces deux documents.
            ",
        ]);
    }
}
