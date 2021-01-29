<?php

namespace App\Entity;

use App\Repository\ArtisteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtisteRepository::class)
 */
class Artiste
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_groupe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIdGroupe(): ?int
    {
        return $this->id_groupe;
    }

    public function setIdGroupe(int $id_groupe): self
    {
        $this->id_groupe = $id_groupe;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
