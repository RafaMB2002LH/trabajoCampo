<?php

namespace App\Entity;

use App\Repository\TrabajadorTrabajoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrabajadorTrabajoRepository::class)]
class TrabajadorTrabajo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tiempo_trabajado = null;

    #[ORM\ManyToOne(inversedBy: 'trabajadorTrabajos')]
    private ?trabajador $trabajador = null;

    #[ORM\ManyToOne(inversedBy: 'trabajadorTrabajos')]
    private ?trabajo $trabajo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getTiempoTrabajado(): ?\DateTimeInterface
    {
        return $this->tiempo_trabajado;
    }

    public function setTiempoTrabajado(?\DateTimeInterface $tiempo_trabajado): static
    {
        $this->tiempo_trabajado = $tiempo_trabajado;

        return $this;
    }

    public function getTrabajador(): ?trabajador
    {
        return $this->trabajador;
    }

    public function setTrabajador(?trabajador $trabajador): static
    {
        $this->trabajador = $trabajador;

        return $this;
    }

    public function getTrabajo(): ?trabajo
    {
        return $this->trabajo;
    }

    public function setTrabajo(?trabajo $trabajo): static
    {
        $this->trabajo = $trabajo;

        return $this;
    }
}
