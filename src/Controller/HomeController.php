<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\MenuController;

class HomeController extends AbstractController
{


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $cafesAccueil = MenuController::getCafes();

        return $this->render('home/index.html.twig', [
            'title' => 'Coffeesshop',
            'cafes' => $cafesAccueil,
        ]);
    }

    
    
}