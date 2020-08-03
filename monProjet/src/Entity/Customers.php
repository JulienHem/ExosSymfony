<?php

// Entity/Customers
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="customers")
 *
 */
class Customers
{
    /**
     * @ORM\Column(name="CustomerID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompanyName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Country;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $Phone;


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
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param mixed $CompanyName
     */
    public function setCompanyName($CompanyName): void
    {
        $this->CompanyName = $CompanyName;
    }


    /**
     * @return mixed
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * @param mixed $ContactName
     */
    public function setContactName($ContactName): void
    {
        $this->ContactName = $ContactName;
    }

    /**
     * @return mixed
     */
    public function getContactTitle()
    {
        return $this->ContactTitle;
    }

    /**
     * @param mixed $ContactTitle
     */
    public function setContactTitle($ContactTitle): void
    {
        $this->ContactTitle = $ContactTitle;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->Adress;
    }

    /**
     * @param mixed $Adress
     */
    public function setAdress($Adress): void
    {
        $this->Adress = $Adress;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     */
    public function setCity($City): void
    {
        $this->City = $City;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * @param mixed $Region
     */
    public function setRegion($Region): void
    {
        $this->Region = $Region;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param mixed $PostalCode
     */
    public function setPostalCode($PostalCode): void
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country): void
    {
        $this->Country = $Country;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     */
    public function setPhone($Phone): void
    {
        $this->Phone = $Phone;
    }


}


