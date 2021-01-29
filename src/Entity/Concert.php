<?php

namespace App\Entity;

use App\Repository\ConcertRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConcertRepository::class)
 */
class Concert
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_programme;

    /**
     * @ORM\Column(type="time")
     */
    private $horaire_debut;

    /**
     * @ORM\Column(type="time")
     */
    private $horaire_fin;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emplacement;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_groupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProgramme(): ?int
    {
        return $this->id_programme;
    }

    public function setIdProgramme(int $id_programme): self
    {
        $this->id_programme = $id_programme;

        return $this;
    }

    public function getHoraireDebut(): ?\DateTimeInterface
    {
        return $this->horaire_debut;
    }

    public function setHoraireDebut(\DateTimeInterface $horaire_debut): self
    {
        $this->horaire_debut = $horaire_debut;

        return $this;
    }

    public function getHoraireFin(): ?\DateTimeInterface
    {
        return $this->horaire_fin;
    }

    public function setHoraireFin(\DateTimeInterface $horaire_fin): self
    {
        $this->horaire_fin = $horaire_fin;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

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
}
