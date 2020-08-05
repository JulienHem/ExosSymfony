<?php

namespace App\Entity;

use App\Repository\SuppliersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SuppliersRepository::class)
 */
class Suppliers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
    */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le nom du fournisseur"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $CompanyName;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le nom du contact"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $ContactName;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le titre du contact"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $ContactTitle;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner l'adresse"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner la ville"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner la région"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le code postal"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le pays"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le numéro de téléphone"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $Phone;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner le numéro de fax"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $Fax;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(
     *     message="Veuillez renseigner la page d'accueil"
     * )
     * @Assert\Regex(
     *     pattern="/^[\s\w\#\_\-éèàçâêîôûùäaëïüö]+$/",
     *     message="Caratère(s) non valide(s)"
     * )
     */
    private $HomePage;

    /**
     * @ORM\OneToMany(targetEntity=Products::class, mappedBy="SupplierID")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

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

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(string $Region): self
    {
        $this->Region = $Region;

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

    public function getHomePage(): ?string
    {
        return $this->HomePage;
    }

    public function setHomePage(string $HomePage): self
    {
        $this->HomePage = $HomePage;

        return $this;
    }

    /**
     * @return Collection|Products[]
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Products $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setSupplierID($this);
        }

        return $this;
    }

    public function removeProduct(Products $product): self
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
            // set the owning side to null (unless already changed)
            if ($product->getSupplierID() === $this) {
                $product->setSupplierID(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->CompanyName;
    }
}
