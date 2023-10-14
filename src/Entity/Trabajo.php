<?php

namespace App\Entity;

use App\Repository\TrabajoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrabajoRepository::class)]
class Trabajo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $codigo = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $salario = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $duracion = null;

    #[ORM\OneToMany(mappedBy: 'trabajo', targetEntity: TrabajadorTrabajo::class)]
    private Collection $trabajadorTrabajos;

    public function __construct()
    {
        $this->trabajadorTrabajos = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): static
    {
        $this->codigo = $codigo;

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

    public function getSalario(): ?string
    {
        return $this->salario;
    }

    public function setSalario(string $salario): static
    {
        $this->salario = $salario;

        return $this;
    }

    public function getDuracion(): ?\DateTimeInterface
    {
        return $this->duracion;
    }

    public function setDuracion(\DateTimeInterface $duracion): static
    {
        $this->duracion = $duracion;

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
            $trabajadorTrabajo->setTrabajo($this);
        }

        return $this;
    }

    public function removeTrabajadorTrabajo(TrabajadorTrabajo $trabajadorTrabajo): static
    {
        if ($this->trabajadorTrabajos->removeElement($trabajadorTrabajo)) {
            // set the owning side to null (unless already changed)
            if ($trabajadorTrabajo->getTrabajo() === $this) {
                $trabajadorTrabajo->setTrabajo(null);
            }
        }

        return $this;
    }
}
