<?php

namespace App\Entity;

use App\Repository\FormationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationsRepository::class)]
class Formations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $formations = null;

    #[ORM\Column(length: 255)]
    private ?string $NomDeFormation = null;

    #[ORM\Column(length: 255)]
    private ?string $Prerequis = null;

    #[ORM\Column(length: 255)]
    private ?string $Duree = null;

    #[ORM\Column(length: 255)]
    private ?string $Prix = null;

    #[ORM\Column(length: 255)]
    private ?string $Financement = null;

    #[ORM\Column(length: 255)]
    private ?string $Programme = null;

    #[ORM\Column(length: 255)]
    private ?string $Diplome = null;

    #[ORM\Column(length: 255)]
    private ?string $Telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $Formateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormations(): ?string
    {
        return $this->formations;
    }

    public function setFormations(string $formations): static
    {
        $this->formations = $formations;

        return $this;
    }

    public function getNomDeFormation(): ?string
    {
        return $this->NomDeFormation;
    }

    public function setNomDeFormation(string $NomDeFormation): static
    {
        $this->NomDeFormation = $NomDeFormation;

        return $this;
    }

    public function getPrerequis(): ?string
    {
        return $this->Prerequis;
    }

    public function setPrerequis(string $Prerequis): static
    {
        $this->Prerequis = $Prerequis;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->Duree;
    }

    public function setDuree(string $Duree): static
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->Prix;
    }

    public function setPrix(string $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getFinancement(): ?string
    {
        return $this->Financement;
    }

    public function setFinancement(string $Financement): static
    {
        $this->Financement = $Financement;

        return $this;
    }

    public function getProgramme(): ?string
    {
        return $this->Programme;
    }

    public function setProgramme(string $Programme): static
    {
        $this->Programme = $Programme;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->Diplome;
    }

    public function setDiplome(string $Diplome): static
    {
        $this->Diplome = $Diplome;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): static
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getFormateur(): ?string
    {
        return $this->Formateur;
    }

    public function setFormateur(string $Formateur): static
    {
        $this->Formateur = $Formateur;

        return $this;
    }
}
