<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodRepository")
 */
class Food
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lentil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sunflower;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLentil(): ?string
    {
        return $this->lentil;
    }

    public function setLentil(string $lentil): self
    {
        $this->lentil = $lentil;

        return $this;
    }

    public function getPea(): ?string
    {
        return $this->pea;
    }

    public function setPea(string $pea): self
    {
        $this->pea = $pea;

        return $this;
    }

    public function getSunflower(): ?string
    {
        return $this->sunflower;
    }

    public function setSunflower(string $sunflower): self
    {
        $this->sunflower = $sunflower;

        return $this;
    }
}
