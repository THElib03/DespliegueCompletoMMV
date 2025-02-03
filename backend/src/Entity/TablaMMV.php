<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosMMV")]
class TablaMMV
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $fraseMMV;
    public function getId(): int
    {
        return $this->id;
    }
    public function getFraseMMV(): string
    {
        return $this->fraseMMV;
    }
    public function setFraseMMV(string $content): self
    {
        $this->fraseMMV = $content;
        return $this;
    }
}

?>
