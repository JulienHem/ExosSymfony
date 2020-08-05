<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="smallint")
     */
    private $CategoryID;

    /**
     * @ORM\Column(type="integer")
     */
    private $QuantityPerUnit;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitsInStock;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitsOnOrder;

    /**
     * @ORM\Column(type="integer")
     */
    private $ReorderLevel;

    /**
     * @ORM\Column(type="integer")
     */
    private $Discontinued;


    /**
     * @ORM\ManyToOne(targetEntity=Suppliers::class, inversedBy="products")
     */
    private $SupplierID;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $picture;


    public function getId(): ?int
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

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }

    public function setCategoryID(int $CategoryID): self
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    public function getQuantityPerUnit(): ?int
    {
        return $this->QuantityPerUnit;
    }

    public function setQuantityPerUnit(int $QuantityPerUnit): self
    {
        $this->QuantityPerUnit = $QuantityPerUnit;

        return $this;
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

    public function getUnitsInStock(): ?int
    {
        return $this->UnitsInStock;
    }

    public function setUnitsInStock(int $UnitsInStock): self
    {
        $this->UnitsInStock = $UnitsInStock;

        return $this;
    }

    public function getUnitsOnOrder(): ?int
    {
        return $this->UnitsOnOrder;
    }

    public function setUnitsOnOrder(int $UnitsOnOrder): self
    {
        $this->UnitsOnOrder = $UnitsOnOrder;

        return $this;
    }

    public function getReorderLevel(): ?int
    {
        return $this->ReorderLevel;
    }

    public function setReorderLevel(int $ReorderLevel): self
    {
        $this->ReorderLevel = $ReorderLevel;

        return $this;
    }

    public function getDiscontinued(): ?int
    {
        return $this->Discontinued;
    }

    public function setDiscontinued(int $Discontinued): self
    {
        $this->Discontinued = $Discontinued;

        return $this;
    }


    public function getSupplierID(): ?Suppliers
    {
        return $this->SupplierID;
    }

    public function setSupplierID(?Suppliers $SupplierID): self
    {
        $this->SupplierID = $SupplierID;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

}
