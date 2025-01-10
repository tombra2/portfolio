<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NavmenuController extends AbstractController
{
    #[Route('/navmenu', name: 'app_navmenu')]
    public function index(): Response
    {
        return $this->render('navmenu/navmenu.html.twig', [
            'controller_name' => 'NavmenuController',
        ]);
    }
}
