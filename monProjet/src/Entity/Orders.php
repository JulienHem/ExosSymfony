<?php
// Entity/Orders
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="suppliers")
 */
class Orders
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
    private $EmployeeID;

    /**
     * @ORM\Column(type="date")
     */
    private $OrderDate;

    /**
     * @ORM\Column(type="date")
     */
    private $RequiredDate;

    /**
     * @ORM\Column(type="date")
     */
    private $ShippedDate;

    /**
     * @ORM\Column(type="string", length="255")
     */
    private $ShipVia;

    /**
     * @ORM\Column(type="integer")
     */
    private $Freight;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShipName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShipAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShipCity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShipRegion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShipPostalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShipCountry;

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
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    /**
     * @param mixed $EmployeeID
     */
    public function setEmployeeID($EmployeeID): void
    {
        $this->EmployeeID = $EmployeeID;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param mixed $OrderDate
     */
    public function setOrderDate($OrderDate): void
    {
        $this->OrderDate = $OrderDate;
    }

    /**
     * @return mixed
     */
    public function getRequiredDate()
    {
        return $this->RequiredDate;
    }

    /**
     * @param mixed $RequiredDate
     */
    public function setRequiredDate($RequiredDate): void
    {
        $this->RequiredDate = $RequiredDate;
    }

    /**
     * @return mixed
     */
    public function getShippedDate()
    {
        return $this->ShippedDate;
    }

    /**
     * @param mixed $ShippedDate
     */
    public function setShippedDate($ShippedDate): void
    {
        $this->ShippedDate = $ShippedDate;
    }

    /**
     * @return mixed
     */
    public function getShipVia()
    {
        return $this->ShipVia;
    }

    /**
     * @param mixed $ShipVia
     */
    public function setShipVia($ShipVia): void
    {
        $this->ShipVia = $ShipVia;
    }

    /**
     * @return mixed
     */
    public function getFreight()
    {
        return $this->Freight;
    }

    /**
     * @param mixed $Freight
     */
    public function setFreight($Freight): void
    {
        $this->Freight = $Freight;
    }

    /**
     * @return mixed
     */
    public function getShipName()
    {
        return $this->ShipName;
    }

    /**
     * @param mixed $ShipName
     */
    public function setShipName($ShipName): void
    {
        $this->ShipName = $ShipName;
    }

    /**
     * @return mixed
     */
    public function getShipAdress()
    {
        return $this->ShipAdress;
    }

    /**
     * @param mixed $ShipAdress
     */
    public function setShipAdress($ShipAdress): void
    {
        $this->ShipAdress = $ShipAdress;
    }

    /**
     * @return mixed
     */
    public function getShipCity()
    {
        return $this->ShipCity;
    }

    /**
     * @param mixed $ShipCity
     */
    public function setShipCity($ShipCity): void
    {
        $this->ShipCity = $ShipCity;
    }

    /**
     * @return mixed
     */
    public function getShipRegion()
    {
        return $this->ShipRegion;
    }

    /**
     * @param mixed $ShipRegion
     */
    public function setShipRegion($ShipRegion): void
    {
        $this->ShipRegion = $ShipRegion;
    }

    /**
     * @return mixed
     */
    public function getShipPostalCode()
    {
        return $this->ShipPostalCode;
    }

    /**
     * @param mixed $ShipPostalCode
     */
    public function setShipPostalCode($ShipPostalCode): void
    {
        $this->ShipPostalCode = $ShipPostalCode;
    }

    /**
     * @return mixed
     */
    public function getShipCountry()
    {
        return $this->ShipCountry;
    }

    /**
     * @param mixed $ShipCountry
     */
    public function setShipCountry($ShipCountry): void
    {
        $this->ShipCountry = $ShipCountry;
    }

}


