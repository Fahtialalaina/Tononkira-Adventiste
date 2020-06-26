<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChantRepository")
 */
class Chant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artiste", inversedBy="Chants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Artiste;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $Titre;

    /**
     * @ORM\Column(type="text")
     */
    private $Parole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtiste(): ?Artiste
    {
        return $this->Artiste;
    }

    public function setArtiste(?Artiste $Artiste): self
    {
        $this->Artiste = $Artiste;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getParole(): ?string
    {
        return $this->Parole;
    }

    public function setParole(string $Parole): self
    {
        $this->Parole = $Parole;

        return $this;
    }
}
