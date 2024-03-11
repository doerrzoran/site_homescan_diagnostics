<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CarrezController extends AbstractController
{
    #[Route('/carrez', name: 'app_carrez')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Mesurage',
            'text' => "Dans certains cas, un propriétaire a l’obligation légale d’informer l’acquéreur ou le locataire potentiel de son bien immobilier sur la surface de ce dernier.
            Pour la vente d’un lot de copropriété de plus de 8 m2 sauf exceptions (caves, garages…)., la superficie Carrez doit être indiquée dès la rédaction du compromis de vente et à fortiori dans l’acte authentique. 
            Depuis 2012 et l’entrée en vigueur de la loi dite Boutin, la superficie d’un logement mis en location doit obligatoirement figurer dans le bail.
            Dans les deux cas, la marge d’erreur de mesure ne doit pas excéder 5%, au risque de voir l’acquéreur ou le locataire intenter une action en réduction du prix de vente ou du montant du loyer au pro-rata de la superficie manquante.
            Au-delà de ces dispositions légales, l’acquéreur est désireux de disposer d’une attestation de superficie précise, établie par un professionnel dûment qualifié et assuré.
            Ainsi, à l’occasion la vente d’une maison individuelle, bien que non concernée par la loi Carrez, beaucoup d’acquéreurs souhaitent que la superficie qui leur a été indiquée lors de la visite soit attestée par un relevé de surfaces établi par un professionnel.
            ",
        ]);
    }
}
