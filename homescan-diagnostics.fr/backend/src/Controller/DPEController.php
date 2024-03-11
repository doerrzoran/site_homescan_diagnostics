<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DPEController extends AbstractController
{
    #[Route('/d/p/e', name: 'app_d_p_e')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Le diagnostic de performance énergétique (DPE) ',
            'text' => "Le diagnostic de performance énergétique (DPE) est la transcription française d’une directive européenne instaurée en 2006.\n
            Son objectif est double :\n
            -	Informer l’acquéreur ou le locataire sur le caractère énergivore ou non du bien proposé.\n
            -	Le cas échéant, donner des pistes de travaux ou d’équipements à envisager afin d’améliorer la situation.\n
            Il a fait l’objet de plusieurs réformes depuis son apparition, et la plus récente est entrée en vigueur au le 1er juillet 2021.\n Désormais, il n’existe plus qu’une seule méthode de calcul dite « 3CL » et le résultat obtenu est juridiquement opposable.\n
            Le diagnostiqueur a pour mission de relever le plus exactement possible un grand nombre de paramètres :\n isolation, caractéristiques des menuiseries extérieures, des systèmes de chauffages ou refroidissement, de production d’eau chaude, de ventilation, etc.\n Ces nombreuses données sont renseignées dans le logiciel réglementaire fourni par l’Ademe, lequel, en fonction des informations relevées, détermine les lettres de classification énergétique et d’émission de gaz à effet de serre du bien.\n Il est à noter que tous les paramètres renseignés par le technicien figurent dans le DPE.   
            ",
        ]);
    }
}
