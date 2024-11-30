<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $startshipCount = 456;

        $myShip = [
            'name' => 'USS Leafy(NC1180)',
            'class' => 'Garden',
            'captain' => 'Alice',
            'status' => 'underConstruction' 
        ];

        return $this->render('main/homepage.html.twig',[
            'numberOfStarShips' => $startshipCount,
            'myShip' => $myShip,
        ]) ;
    }
}
