<?php declare(strict_types=1);

namespace App\Entity;

use App\Suit;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Card
{
    #[ORM\Column(nullable: false), ORM\Id, ORM\GeneratedValue]
    public ?int $id = null;

    #[ORM\Column]
    public Suit $suit = Suit::Hearts;
}
