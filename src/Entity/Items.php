<?php

namespace App\Entity;

use App\Repository\ItemsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemsRepository::class)
 */
class Items
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="items")
     */
    private $produit_id;

    /**
     * @ORM\OneToMany(targetEntity=Panier::class, mappedBy="items")
     */
    private $panier_id;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="items")
     */
    private $order_id;

    public function __construct()
    {
        $this->produit_id = new ArrayCollection();
        $this->panier_id = new ArrayCollection();
        $this->order_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProduitId(): Collection
    {
        return $this->produit_id;
    }

    public function addProduitId(Product $produitId): self
    {
        if (!$this->produit_id->contains($produitId)) {
            $this->produit_id[] = $produitId;
            $produitId->setItems($this);
        }

        return $this;
    }

    public function removeProduitId(Product $produitId): self
    {
        if ($this->produit_id->removeElement($produitId)) {
            // set the owning side to null (unless already changed)
            if ($produitId->getItems() === $this) {
                $produitId->setItems(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Panier[]
     */
    public function getPanierId(): Collection
    {
        return $this->panier_id;
    }

    public function addPanierId(Panier $panierId): self
    {
        if (!$this->panier_id->contains($panierId)) {
            $this->panier_id[] = $panierId;
            $panierId->setItems($this);
        }

        return $this;
    }

    public function removePanierId(Panier $panierId): self
    {
        if ($this->panier_id->removeElement($panierId)) {
            // set the owning side to null (unless already changed)
            if ($panierId->getItems() === $this) {
                $panierId->setItems(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrderId(): Collection
    {
        return $this->order_id;
    }

    public function addOrderId(Order $orderId): self
    {
        if (!$this->order_id->contains($orderId)) {
            $this->order_id[] = $orderId;
            $orderId->setItems($this);
        }

        return $this;
    }

    public function removeOrderId(Order $orderId): self
    {
        if ($this->order_id->removeElement($orderId)) {
            // set the owning side to null (unless already changed)
            if ($orderId->getItems() === $this) {
                $orderId->setItems(null);
            }
        }

        return $this;
    }
}
