<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderProducts
 *
 * @ORM\Table(name="order-products")
 * @ORM\Entity
 */
class OrderProducts
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
     * @ORM\Column(name="userorderID", type="integer", nullable=false)
     */
    private $userorderid;

    /**
     * @var int
     *
     * @ORM\Column(name="row", type="integer", nullable=false)
     */
    private $row;

    /**
     * @var int
     *
     * @ORM\Column(name="seat", type="integer", nullable=false)
     */
    private $seat;

    /**
     * @var int
     *
     * @ORM\Column(name="type_price", type="integer", nullable=false)
     */
    private $typePrice;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;


}
