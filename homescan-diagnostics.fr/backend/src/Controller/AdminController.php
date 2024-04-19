<?php

namespace App\Controller;

use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/authentification', name: 'app_admin_authentification', methods:['POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        $username = $data['username'];
        $password = $data['password'];

        $adminRepository = $entityManager->getRepository(Admin::class);

        $admin = $adminRepository->findOneBy(['username' => $username]);

        if (!$admin || $password != $admin->getPassword()) {
            return $this->json('Invalid username or password', Response::HTTP_UNAUTHORIZED);
        }

        // If username and password are correct, return a success response
        return $this->json('Authenticated successfully', Response::HTTP_OK);
    }
}
