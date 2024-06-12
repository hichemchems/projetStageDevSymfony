<?php

namespace App\Entity;

use App\Repository\EtudiantsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantsRepository::class)]
class Etudiants
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $string = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $CarteDidentite = null;

    #[ORM\Column(length: 255)]
    private ?string $DateDeNaissance = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Formation = null;

    #[ORM\Column(length: 255)]
    private ?string $Referant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): ?string
    {
        return $this->string;
    }

    public function setString(string $string): static
    {
        $this->string = $string;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getCarteDidentite(): ?string
    {
        return $this->CarteDidentite;
    }

    public function setCarteDidentite(string $CarteDidentite): static
    {
        $this->CarteDidentite = $CarteDidentite;

        return $this;
    }

    public function getDateDeNaissance(): ?string
    {
        return $this->DateDeNaissance;
    }

    public function setDateDeNaissance(string $DateDeNaissance): static
    {
        $this->DateDeNaissance = $DateDeNaissance;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->Formation;
    }

    public function setFormation(string $Formation): static
    {
        $this->Formation = $Formation;

        return $this;
    }

    public function getReferant(): ?string
    {
        return $this->Referant;
    }

    public function setReferant(string $Referant): static
    {
        $this->Referant = $Referant;

        return $this;
    }
}
