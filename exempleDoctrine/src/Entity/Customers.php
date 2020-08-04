<?php

namespace App\Entity;

use App\Repository\CustomersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomersRepository::class)
 */
class Customers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
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
    private $Address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Regio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Fax;

    /**
     * @ORM\Column(type="integer")
     */
    private $CustomerID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(string $CompanyName): self
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->ContactName;
    }

    public function setContactName(string $ContactName): self
    {
        $this->ContactName = $ContactName;

        return $this;
    }

    public function getContactTitle(): ?string
    {
        return $this->ContactTitle;
    }

    public function setContactTitle(string $ContactTitle): self
    {
        $this->ContactTitle = $ContactTitle;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getRegio(): ?string
    {
        return $this->Regio;
    }

    public function setRegio(string $Regio): self
    {
        $this->Regio = $Regio;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    public function setPostalCode(string $PostalCode): self
    {
        $this->PostalCode = $PostalCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->Fax;
    }

    public function setFax(string $Fax): self
    {
        $this->Fax = $Fax;

        return $this;
    }

    public function getCustomerID(): ?int
    {
        return $this->CustomerID;
    }

    public function setCustomerID(int $CustomerID): self
    {
        $this->CustomerID = $CustomerID;

        return $this;
    }
}
