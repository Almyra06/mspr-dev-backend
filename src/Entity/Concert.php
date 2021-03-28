<?php

namespace App\Entity;

use App\Repository\ConcertRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="concerts")
     */
    private $groupe;

    /**
     * @ORM\ManyToOne(targetEntity=Programme::class, inversedBy="programme")
     */
    private $programme_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    public function __construct()
    {


    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProgrammeId(): ?Programme
    {
        return $this->programme_id;
    }

    public function setProgrammeId(?Programme $programme_id): self
    {
        $this->programme_id = $programme_id;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

//Tester des relations, groupe par exemple avec un recipe
}
