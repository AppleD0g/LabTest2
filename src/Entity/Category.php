<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
    private $pulse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPulse(): ?string
    {
        return $this->pulse;
    }

    public function setPulse(string $pulse): self
    {
        $this->pulse = $pulse;

        return $this;
    }

    public function getSeed(): ?string
    {
        return $this->seed;
    }

    public function setSeed(string $seed): self
    {
        $this->seed = $seed;

        return $this;
    }

    public function getNut(): ?string
    {
        return $this->nut;
    }

    public function setNut(string $nut): self
    {
        $this->nut = $nut;

        return $this;
    }
}
