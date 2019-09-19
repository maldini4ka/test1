<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seans
 *
 * @ORM\Table(name="seans")
 * @ORM\Entity
 */
class Seans
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time", nullable=false)
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="filmID", type="integer", nullable=false)
     */
    private $filmid;

    /**
     * @var int
     *
     * @ORM\Column(name="hallID", type="integer", nullable=false)
     */
    private $hallid;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getFilmid(): ?int
    {
        return $this->filmid;
    }

    public function setFilmid(int $filmid): self
    {
        $this->filmid = $filmid;

        return $this;
    }

    public function getHallid(): ?int
    {
        return $this->hallid;
    }

    public function setHallid(int $hallid): self
    {
        $this->hallid = $hallid;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }


}
