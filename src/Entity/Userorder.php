<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userorder
 *
 * @ORM\Table(name="userorder")
 * @ORM\Entity
 */
class Userorder
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
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="seansId", type="integer", nullable=false)
     */
    private $seansid;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getSeansid(): ?int
    {
        return $this->seansid;
    }

    public function setSeansid(int $seansid): self
    {
        $this->seansid = $seansid;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
