<?php

namespace App\Entity;

use App\Repository\TrabajadorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrabajadorRepository::class)]
class Trabajador
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 9)]
    private ?string $dni = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre = null;

    #[ORM\Column(length: 50)]
    private ?string $apellido_1 = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $apellido_2 = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_nac = null;

    #[ORM\OneToMany(mappedBy: 'trabajador', targetEntity: TrabajadorTrabajo::class)]
    private Collection $trabajadorTrabajos;

    public function __construct()
    {
        $this->trabajadorTrabajos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): static
    {
        $this->dni = $dni;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido1(): ?string
    {
        return $this->apellido_1;
    }

    public function setApellido1(string $apellido_1): static
    {
        $this->apellido_1 = $apellido_1;

        return $this;
    }

    public function getApellido2(): ?string
    {
        return $this->apellido_2;
    }

    public function setApellido2(?string $apellido_2): static
    {
        $this->apellido_2 = $apellido_2;

        return $this;
    }

    public function getFechaNac(): ?\DateTimeInterface
    {
        return $this->fecha_nac;
    }

    public function setFechaNac(\DateTimeInterface $fecha_nac): static
    {
        $this->fecha_nac = $fecha_nac;

        return $this;
    }

    /**
     * @return Collection<int, TrabajadorTrabajo>
     */
    public function getTrabajadorTrabajos(): Collection
    {
        return $this->trabajadorTrabajos;
    }

    public function addTrabajadorTrabajo(TrabajadorTrabajo $trabajadorTrabajo): static
    {
        if (!$this->trabajadorTrabajos->contains($trabajadorTrabajo)) {
            $this->trabajadorTrabajos->add($trabajadorTrabajo);
            $trabajadorTrabajo->setTrabajador($this);
        }

        return $this;
    }

    public function removeTrabajadorTrabajo(TrabajadorTrabajo $trabajadorTrabajo): static
    {
        if ($this->trabajadorTrabajos->removeElement($trabajadorTrabajo)) {
            // set the owning side to null (unless already changed)
            if ($trabajadorTrabajo->getTrabajador() === $this) {
                $trabajadorTrabajo->setTrabajador(null);
            }
        }

        return $this;
    }
}
