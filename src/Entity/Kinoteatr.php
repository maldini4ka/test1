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


}
