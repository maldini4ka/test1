<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userorder
 *
 * @ORM\Table(name="userorder")
 * @ORM\Entity(repositoryClass="App\Repository\UserorderRepository")
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
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userid;

    /**
     * @var Seans
     * @ORM\ManyToOne(targetEntity="Seans")
     * @ORM\JoinColumn(name="seansId", referencedColumnName="id")
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

    public function getUserid(): ?User
    {
        return $this->userid;
    }

    public function setUserid(User $userid): self
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
