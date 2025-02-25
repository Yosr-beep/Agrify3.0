<?php

namespace App\Entity;

use App\Repository\PresenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PresenceRepository::class)]
class Presence
{
    #[ORM\Id]
    #[ORM\Column]

    private ?int $id_p = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $presenceState = null;

    public function getIdP(): ?int
    {
        return $this->id_p;
    }

    public function setIdP(int $id_p): static
    {
        $this->id_p = $id_p;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getPresenceState(): ?string
    {
        return $this->presenceState;
    }

    public function setPresenceState(string $presenceState): static
    {
        $this->presenceState = $presenceState;

        return $this;
    }
}
