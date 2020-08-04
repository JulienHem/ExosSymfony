<?php

// Entity/Product.php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Products
{

    /**
     * @ORM\Column(name="ProductId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $id;

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
     * @ORM\Column(name="ProductName", type="string", length=40)
     */
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


    /**
     * @ORM\Column(name="SupplierID", type="integer", nullable=false))
     */

    private $SupId;

    /**
     * @return mixed
     */
    public function getSupId()
    {
        return $this->SupId;
    }

    /**
     * @param mixed $SupId
     */
    public function setSupId($SupId): void
    {
        $this->SupId = $SupId;
    }


    /**
     * @ORM\Column(name="CategoryID", type="integer", nullable=false))
     */

    private $CatId;

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->CatId;
    }

    /**
     * @param mixed $CatId
     */
    public function setCatId($CatId): void
    {
        $this->CatId = $CatId;
    }

    /**
     * @ORM\Column(name="QuantityPerUnit", type="string", length=40)
     */

    private $QtePerUnit;

    /**
     * @return mixed
     */
    public function getQtePerUnit()
    {
        return $this->QtePerUnit;
    }

    /**
     * @param mixed $QtePerUnit
     */
    public function setQtePerUnit($QtePerUnit): void
    {
        $this->QtePerUnit = $QtePerUnit;
    }

    /**
     * @ORM\Column(name="UnitPrice", type="integer", nullable=false))
     */
    private $UnitPrice;

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
     * @ORM\Column(name="UnitsInStock", type="integer", nullable=false))
     */

    private $UnitIS;

    /**
     * @return mixed
     */
    public function getUnitIS()
    {
        return $this->UnitIS;
    }

    /**
     * @param mixed $UnitIS
     */
    public function setUnitIS($UnitIS): void
    {
        $this->UnitIS = $UnitIS;
    }

    /**
     * @ORM\Column(name="UnitsOnOrder", type="integer", nullable=false))
     */

    private $UnitOO;

    /**
     * @return mixed
     */
    public function getUnitOO()
    {
        return $this->UnitOO;
    }

    /**
     * @param mixed $UnitOO
     */
    public function setUnitOO($UnitOO): void
    {
        $this->UnitOO = $UnitOO;
    }

    /**
     * @ORM\Column(name="ReorderLevel", type="integer", nullable=false))
     */

    private $Reorder;

    /**
     * @return mixed
     */
    public function getReorder()
    {
        return $this->Reorder;
    }

    /**
     * @param mixed $Reorder
     */
    public function setReorder($Reorder): void
    {
        $this->Reorder = $Reorder;
    }

    /**
     * @ORM\Column(name="Discontinued", type="integer", nullable=false))
     */

    private $Discontinued;

    /**
     * @return mixed
     */
    public function getDiscontinued()
    {
        return $this->Discontinued;
    }

    /**
     * @param mixed $Discontinued
     */
    public function setDiscontinued($Discontinued): void
    {
        $this->Discontinued = $Discontinued;
    }

    /**
     * @var \Suppliers
     *
     * @ORM\ManyToOne(targetEntity="Suppliers")
     * @ORM\JoinColumn(name="SupplierID", referencedColumnName="SupplierId")
     *
     */
    private $suppliers;

    public function getSuppliers(): ?Suppliers
    {
        return $this->suppliers;
    }

    public function setSuppliers(?Suppliers $suppliers): self
    {
        $this->suppliers = $suppliers;

        return $this;
    }

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
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
