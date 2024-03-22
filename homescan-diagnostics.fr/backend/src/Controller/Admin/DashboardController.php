<?php

namespace App\Controller\Admin;

use App\Entity\Asbestos;
use App\Entity\Carrez;
use App\Entity\Contact;
use App\Entity\DAAD;
use App\Entity\DPAD;
use App\Entity\DPAT;
use App\Entity\DPE;
use App\Entity\DTA;
use App\Entity\DTAD;
use App\Entity\DTAT;
use App\Entity\Electricity;
use App\Entity\Energy;
use App\Entity\ERP;
use App\Entity\Gaz;
use App\Entity\HomePage;
use App\Entity\Lead;
use App\Entity\Missions;
use App\Entity\RAAT;
use App\Entity\Society;
use App\Entity\Termites;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
     

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(HomePageCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(ContactCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(AbsestosCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(CarrezCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DPECrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DTACrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(ElectricityCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(ElectricityCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(EnergyCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(ERPCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(GazCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(LeadCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(MissionsCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(RAATCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DPATCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DTATCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DAADCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DTADCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(DPADCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(TermitesCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(SocietyCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Backend');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Home', 'fas fa-list', HomePage::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-list', Contact::class);
        yield MenuItem::linkToCrud('Society', 'fas fa-list', Society::class);
        yield MenuItem::linkToCrud('Missions', 'fas fa-list', Missions::class);
        yield MenuItem::linkToCrud('Amiante', 'fas fa-list', Asbestos::class);
        yield MenuItem::linkToCrud('Termites', 'fas fa-list', Termites::class);
        yield MenuItem::linkToCrud('Carrez', 'fas fa-list', Carrez::class);
        yield MenuItem::linkToCrud('Electricité  ', 'fas fa-list', Electricity::class);
        yield MenuItem::linkToCrud('Energie', 'fas fa-list', Energy::class);
        yield MenuItem::linkToCrud('Gaz', 'fas fa-list', Gaz::class);
        yield MenuItem::linkToCrud('Plomb', 'fas fa-list', Lead::class);
        yield MenuItem::linkToCrud('DPE', 'fas fa-list', DPE::class);
        yield MenuItem::linkToCrud('ERP', 'fas fa-list', ERP::class);
        yield MenuItem::linkToCrud('RAAT', 'fas fa-list', RAAT::class);
        yield MenuItem::linkToCrud('DPAT', 'fas fa-list', DPAT::class);
        yield MenuItem::linkToCrud('DTAT', 'fas fa-list', DTAT::class);
        yield MenuItem::linkToCrud('DAAD', 'fas fa-list', DAAD::class);
        yield MenuItem::linkToCrud('DTAD', 'fas fa-list', DTAD::class);
        yield MenuItem::linkToCrud('DPAD', 'fas fa-list', DPAD::class);
    }
}
