<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kinoteatr
 *
 * @ORM\Table(name="kinoteatr")
 * @ORM\Entity
 */
class Kinoteatr
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
     * @ORM\Column(name="info", type="integer", nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=false)
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInfo(): ?int
    {
        return $this->info;
    }

    public function setInfo(int $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }


}
