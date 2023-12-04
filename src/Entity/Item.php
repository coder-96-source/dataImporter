<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $entity_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CategoryName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sku = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0', nullable: true)]
    private ?string $price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Brand = null;

    #[ORM\Column(nullable: true)]
    private ?int $Rating = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CaffeineType = null;

    #[ORM\Column(nullable: true)]
    private ?int $Count = null;

    #[ORM\Column(nullable: true)]
    private ?bool $Flavored = null;

    #[ORM\Column(nullable: true)]
    private ?bool $Seasonal = null;

    #[ORM\Column(nullable: true)]
    private ?bool $Instock = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Facebook = null;

    #[ORM\Column(nullable: true)]
    private ?bool $IsKCup = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntityId(): ?int
    {
        return $this->entity_id;
    }

    public function setEntityId(int $entity_id): static
    {
        $this->entity_id = $entity_id;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->CategoryName;
    }

    public function setCategoryName(?string $CategoryName): static
    {
        $this->CategoryName = $CategoryName;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(?string $Brand): static
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->Rating;
    }

    public function setRating(?int $Rating): static
    {
        $this->Rating = $Rating;

        return $this;
    }

    public function getCaffeineType(): ?string
    {
        return $this->CaffeineType;
    }

    public function setCaffeineType(?string $CaffeineType): static
    {
        $this->CaffeineType = $CaffeineType;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->Count;
    }

    public function setCount(?int $Count): static
    {
        $this->Count = $Count;

        return $this;
    }

    public function isFlavored(): ?bool
    {
        return $this->Flavored;
    }

    public function setFlavored(?bool $Flavored): static
    {
        $this->Flavored = $Flavored;

        return $this;
    }

    public function isSeasonal(): ?bool
    {
        return $this->Seasonal;
    }

    public function setSeasonal(?bool $Seasonal): static
    {
        $this->Seasonal = $Seasonal;

        return $this;
    }

    public function isInstock(): ?bool
    {
        return $this->Instock;
    }

    public function setInstock(?bool $Instock): static
    {
        $this->Instock = $Instock;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->Facebook;
    }

    public function setFacebook(?string $Facebook): static
    {
        $this->Facebook = $Facebook;

        return $this;
    }

    public function isIsKCup(): ?bool
    {
        return $this->IsKCup;
    }

    public function setIsKCup(?bool $IsKCup): static
    {
        $this->IsKCup = $IsKCup;

        return $this;
    }
}
