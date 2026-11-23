<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MenuController extends AbstractController
{

    private const array CAFES = [
        ['nom' => 'Expresso', 'description' => 'Café court, corsé et intense, couronné d’une fine mousse dorée.', 'prix' => '2,00 €'],
        ['nom' => 'Ristretto', 'description' => 'Extraction encore plus courte que l’expresso, très concentrée en arômes et peu amère.', 'prix' => '2,00 €'],
        ['nom' => 'Café allongé (Americano)', 'description' => 'Expresso dilué avec de l’eau chaude pour un résultat plus doux et plus long en bouche.', 'prix' => '2,20 €'],
        ['nom' => 'Noisette', 'description' => 'Expresso relevé d’une simple goutte de lait chaud ou de mousse de lait.', 'prix' => '2,20 €'],
        ['nom' => 'Double expresso', 'description' => 'Deux doses d’expresso dans une même tasse pour doubler l’intensité et la caféine.', 'prix' => '3,50 €'],
        ['nom' => 'Café crème', 'description' => 'Expresso généreusement complété de lait chaud émulsionné, doux et onctueux.', 'prix' => '4,00 €'],
        ['nom' => 'Cappuccino', 'description' => 'Équilibre entre un tiers d’expresso, un tiers de lait chaud et un tiers de mousse épaisse.', 'prix' => '4,50 €'],
        ['nom' => 'Flat White', 'description' => 'Double expresso recouvert d’une fine micro-mousse de lait veloutée, plus corsée que le latte.', 'prix' => '4,50 €'],
        ['nom' => 'Café Latte', 'description' => 'Grand verre de lait chaud légèrement mousse dans lequel on verse un expresso.', 'prix' => '5,00 €'],
        ['nom' => 'Moka (Mochaccino)', 'description' => 'Alliance gourmande d’un expresso, de lait chaud et de chocolat fondu ou en poudre.', 'prix' => '5,00 €'],
    ];

    public static function getCafes(): array
    {
        return self::CAFES;
    }
    
    #[Route('/menu', name: 'app_menu')]
    public function index(): Response
    {
        return $this->render('menu/index.html.twig', [
            'title' => 'Coffeesshop',
            'cafes' => self::CAFES,
        ]);
    }
}