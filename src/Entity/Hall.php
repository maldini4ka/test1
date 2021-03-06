<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hall
 *
 * @ORM\Table(name="hall")
 * @ORM\Entity(repositoryClass="App\Repository\HallRepository")
 */
class Hall
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="rows", type="integer", nullable=false)
     */
    private $rows;

    /**
     * @var int
     *
     * @ORM\Column(name="SeatsInRow", type="integer", nullable=false)
     */
    private $seatsinrow;

    /**
     * @var Kinoteatr
     * @ORM\ManyToOne(targetEntity="Kinoteatr")
     * @ORM\JoinColumn(name="kinoteatrId", referencedColumnName="id")
     */
    private $kinoteatrid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hallname;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRows(): ?int
    {
        return $this->rows;
    }

    public function setRows(int $rows): self
    {
        $this->rows = $rows;

        return $this;
    }

    public function getSeatsinrow(): ?int
    {
        return $this->seatsinrow;
    }

    public function setSeatsinrow(int $seatsinrow): self
    {
        $this->seatsinrow = $seatsinrow;

        return $this;
    }

    public function getKinoteatrid(): ?Kinoteatr
    {
        return $this->kinoteatrid;
    }

    public function setKinoteatrid(Kinoteatr $kinoteatrid): self
    {
        $this->kinoteatrid = $kinoteatrid;

        return $this;
    }

    public function getHallname(): ?string
    {
        return $this->hallname;
    }

    public function setHallname(string $hallname): self
    {
        $this->hallname = $hallname;

        return $this;
    }

    public function __toString()
    {
        return $this->hallname;
    }


}
