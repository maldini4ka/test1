<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderProducts
 *
 * @ORM\Table(name="order_products")
 * @ORM\Entity(repositoryClass="App\Repository\OrderProductsRepository")
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserorderid(): ?int
    {
        return $this->userorderid;
    }

    public function setUserorderid(Userorder $userorderid): self
    {
        $this->userorderid = $userorderid;

        return $this;
    }

    public function getRow(): ?int
    {
        return $this->row;
    }

    public function setRow(int $row): self
    {
        $this->row = $row;

        return $this;
    }

    public function getSeat(): ?int
    {
        return $this->seat;
    }

    public function setSeat(int $seat): self
    {
        $this->seat = $seat;

        return $this;
    }

    public function getTypePrice(): ?int
    {
        return $this->typePrice;
    }

    public function setTypePrice(int $typePrice): self
    {
        $this->typePrice = $typePrice;

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
