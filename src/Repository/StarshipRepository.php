<?php


namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
        
    }

    public function findAll(): array
    {
        $this->logger->info("Starship  collection retreved");
        return [
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
    }
}
?>