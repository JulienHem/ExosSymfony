<?php

// Entity/OrderDetails
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="OrderDetails")
 */
class OrderDetails
{
    /**
     * @ORM\Column(name="OrderID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     */
    public function setUnitPrice($UnitPrice): void
    {
        $this->UnitPrice = $UnitPrice;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param mixed $Quantity
     */
    public function setQuantity($Quantity): void
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     *
     */
    private $orders;

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

}




