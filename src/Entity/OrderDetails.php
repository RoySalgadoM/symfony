<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetails
 *
 * @ORM\Table(name="orderdetails", indexes={@ORM\Index(name="orderdetails_ibfk_1", columns={"orderNumber"}), @ORM\Index(name="orderdetails_ibfk_2", columns={"productCode"})})
 * @ORM\Entity
 */
class OrderDetails
{
    /**
     * @var \Orders
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orderNumber", referencedColumnName="orderNumber")
     * })
     */
    private $orderNumber;

    /**
     * @var \Products
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productCode", referencedColumnName="productCode")
     * })
     */
    private  $productCode;

    /**
     * @var int
     *
     * @ORM\Column(name="quantityOrdered", type="integer", nullable=false)
     */
    private $quantityOrdered;

    /**
     * @var float
     *
     * @ORM\Column(name="priceEach", type="float", precision=10, scale=0, nullable=false)
     */
    private $priceEach;

    /**
     * @var int
     *
     * @ORM\Column(name="orderLineNumber", type="smallint", nullable=false)
     */
    private $orderLineNumber;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderNumber = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productCode = new ArrayCollection();
    }

    public function getQuantityOrdered(): ?int
    {
        return $this->quantityOrdered;
    }

    public function setQuantityOrdered(int $quantityOrdered): self
    {
        $this->quantityOrdered = $quantityOrdered;

        return $this;
    }

    public function getPriceEach(): ?float
    {
        return $this->priceEach;
    }

    public function setPriceEach(float $priceEach): self
    {
        $this->priceEach = $priceEach;

        return $this;
    }

    public function getOrderLineNumber(): ?int
    {
        return $this->orderLineNumber;
    }

    public function setOrderLineNumber(int $orderLineNumber): self
    {
        $this->orderLineNumber = $orderLineNumber;

        return $this;
    }

    /**
     * @return Collection|Orders[]
     */
    public function getOrderNumber(): Collection
    {
        return $this->orderNumber;
    }

    public function addOrderNumber(Orders $orderNumber): self
    {
        if (!$this->orderNumber->contains($orderNumber)) {
            $this->orderNumber[] = $orderNumber;
        }

        return $this;
    }

    public function removeOrderNumber(Orders $orderNumber): self
    {
        $this->orderNumber->removeElement($orderNumber);

        return $this;
    }

    /**
     * @return Collection|Products[]
     */
    public function getProductCode(): Collection
    {
        return $this->productCode;
    }

    public function addProductCode(Products $productCode): self
    {
        if (!$this->productCode->contains($productCode)) {
            $this->productCode[] = $productCode;
        }

        return $this;
    }

    public function removeProductCode(Products $productCode): self
    {
        $this->productCode->removeElement($productCode);

        return $this;
    }

    public function setOrderNumber(?Orders $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function setProductCode(?Products $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }
}