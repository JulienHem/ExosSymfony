<?php

namespace App\Entity;

use App\Repository\OrderDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderDetailsRepository::class)
 */
class OrderDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $Discount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnitPrice(): ?int
    {
        return $this->UnitPrice;
    }

    public function setUnitPrice(int $UnitPrice): self
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getDiscount(): ?int
    {
        return $this->Discount;
    }

    public function setDiscount(int $Discount): self
    {
        $this->Discount = $Discount;

        return $this;
    }
}
