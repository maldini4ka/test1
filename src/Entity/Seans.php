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


}
