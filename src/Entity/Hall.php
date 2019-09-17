<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hall
 *
 * @ORM\Table(name="hall")
 * @ORM\Entity
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
     * @var int
     *
     * @ORM\Column(name="kinoteatrId", type="integer", nullable=false)
     */
    private $kinoteatrid;


}
