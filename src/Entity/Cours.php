<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cours = null;

    #[ORM\Column(length: 255)]
    private ?string $documents = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCours(): ?string
    {
        return $this->cours;
    }

    public function setCours(string $cours): static
    {
        $this->cours = $cours;

        return $this;
    }

    public function getDocuments(): ?string
    {
        return $this->documents;
    }

    public function setDocuments(string $documents): static
    {
        $this->documents = $documents;

        return $this;
    }
}
