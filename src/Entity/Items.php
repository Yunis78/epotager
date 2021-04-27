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
     * @ORM\OneToMany(targetEntity=product::class, mappedBy="items")
     */
    private $produit_id;

    /**
     * @ORM\OneToMany(targetEntity=panier::class, mappedBy="items")
     */
    private $panier_id;

    /**
     * @ORM\OneToMany(targetEntity=order::class, mappedBy="items")
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
     * @return Collection|product[]
     */
    public function getProduitId(): Collection
    {
        return $this->produit_id;
    }

    public function addProduitId(product $produitId): self
    {
        if (!$this->produit_id->contains($produitId)) {
            $this->produit_id[] = $produitId;
            $produitId->setItems($this);
        }

        return $this;
    }

    public function removeProduitId(product $produitId): self
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
     * @return Collection|panier[]
     */
    public function getPanierId(): Collection
    {
        return $this->panier_id;
    }

    public function addPanierId(panier $panierId): self
    {
        if (!$this->panier_id->contains($panierId)) {
            $this->panier_id[] = $panierId;
            $panierId->setItems($this);
        }

        return $this;
    }

    public function removePanierId(panier $panierId): self
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
     * @return Collection|order[]
     */
    public function getOrderId(): Collection
    {
        return $this->order_id;
    }

    public function addOrderId(order $orderId): self
    {
        if (!$this->order_id->contains($orderId)) {
            $this->order_id[] = $orderId;
            $orderId->setItems($this);
        }

        return $this;
    }

    public function removeOrderId(order $orderId): self
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
