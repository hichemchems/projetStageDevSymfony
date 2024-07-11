<?php

namespace App\Controller\Admin;

use App\Entity\Formations;
use App\Entity\User;
use App\Entity\Formateurs;



use App\Controller\IndexHomeController;
use App\Entity\Client;
use App\Entity\Cours;
use App\Entity\Etudiants;
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
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(FormationsCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {use App\Entity\User;
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
            ->setTitle('Kissyma Consulting Formation');
            
          
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Formations', 'fa fa-home', Formations::class);
        yield MenuItem::linkToCrud('Users', 'fa fa-users', User::class);
        yield MenuItem::linkToCrud('Formateurs', 'fa fa-user-o', Formateurs::class);
        yield MenuItem::linkToCrud('Client', 'fa-solid fa-person', Client::class);
        yield MenuItem::linkToCrud('Cours', 'fa fa-person-chalkboard', Cours::class);
        yield MenuItem::linkToCrud('Etudiants', 'fa fa-graduation-cap', Etudiants::class);

        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
