<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seans
 *
 * @ORM\Table(name="seans")
 * @ORM\Entity(repositoryClass="App\Repository\SeansRepository")
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
     *@ORM\ManyToOne(targetEntity="Film", inversedBy="films")
     * @ORM\JoinColumn(name="film_Id", referencedColumnName="id")
     */
    private $filmid;

    /**
     * @var Hall
     * @ORM\ManyToOne(targetEntity="Hall")
     * @ORM\JoinColumn(name="hallId", referencedColumnName="id")
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

    public function getFilmid(): ?Film
    {
        return $this->filmid;
    }

    public function setFilmid(Film $filmid): self
    {
        $this->filmid = $filmid;

        return $this;
    }

    public function getHallid(): ?Hall
    {
        return $this->hallid;
    }

    public function setHallid(Hall $hallid): self
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

    public function getFilmtestid(): ?Filmtest
    {
        return $this->filmtestid;
    }

    public function setFilmtestid(?Filmtest $filmtestid): self
    {
        $this->filmtestid = $filmtestid;

        return $this;
    }


}
