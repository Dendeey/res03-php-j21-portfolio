<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $main_tech = null;

    #[ORM\Column(length: 255)]
    private ?string $second_tech = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMainTech(): ?string
    {
        return $this->main_tech;
    }

    public function setMainTech(string $main_tech): self
    {
        $this->main_tech = $main_tech;

        return $this;
    }

    public function getSecondTech(): ?string
    {
        return $this->second_tech;
    }

    public function setSecondTech(string $second_tech): self
    {
        $this->second_tech = $second_tech;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
