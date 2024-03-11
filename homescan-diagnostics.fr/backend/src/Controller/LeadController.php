<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class LeadController extends AbstractController
{
    #[Route('/lead', name: 'app_lead')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'constat de risque d’exposition au plomb (CREP) ',
            'text' => "Le plomb a été très couramment utilisé dans les peintures jusque dans les années 1930 au moins.
            Lorsqu’il est ingéré, surtout par les jeunes enfants, il peut être à l’origine d’une intoxication sévère, le saturnisme.
            Afin de lutter contre cette maladie, les pouvoirs publics ont mis en place un certain nombre de dispositions :
            -	Tout logement proposé à la vente ou à la location doit être accompagné d’un constat de risque d’exposition au plomb (CREP) s’il s’agit d’un immeuble datant d’avant 1949.
            -	Dans le cas d’une vente, un autre CREP portant cette fois sur les parties communes doit être fourni.
            Le diagnostic plomb avant démolition et avant travaux est dans certains cas nécessaire.
            Il est à noter que l’utilisation de revêtements contenant du plomb dans certaines applications (minium de plomb de couleur orangé en sous-couches des ferronneries, notamment) a perduré jusqu’au milieu des années 1990.
            
            ",
        ]);
    }
}
