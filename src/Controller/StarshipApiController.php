<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController 
{
    #[Route('api/startships')]
    public function detCollection(): Response
    {
       $startships =[
            new Starship(
                1,
                'USS Leafy(NC1180)',
                'Garden',
                'Jarmie-Luc Pickel',
                'repaired'
            ),
            new Starship(
                2,
                'USS Espresso(NC1180)',
                'Plander',
                'Antrova',
                'taken over by 0'
            ),
            new Starship(
                1,
                'USS Blunder(NC1180)',
                'Delta',
                'Katrin Jonathan',
                'underconstraction'
            ),
            
        ];
            return $this->json($startships);
    }
}

?>