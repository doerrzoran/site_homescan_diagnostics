<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class SocietyController extends AbstractController
{
    #[Route('/society', name: 'app_society')]
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'L\'entreprise',
            'text' => "L’entreprise a démarré son activité en 2010.
            Il a été décidé de rester sous forme d’entreprise unipersonnelle (EURL), bien qu’ayant connu un développement continu.
            Ce choix permet une très grande souplesse : les délais d’intervention et de remise des dossiers sont réduits. Les clients ont un interlocuteur unique, qui connait bien leur dossier.
            En cas d’indisponibilité ou bien de nécessité d’accroitre ponctuellement les moyens humains sur certaines missions importantes, l’entreprise peut s’appuyer un réseau de partenaires de confiance.
            Avec 5000 dossiers traités, l’entreprise a acquis un haut niveau d’expertise, dans les différentes missions qu’elle propose.
            ",
        ]);
    }
}
