<?php

namespace App\Entity;

use App\Repository\PropertiesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PropertiesRepository::class)
 */
class Properties
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $adresse_numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $adresse_cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_pays;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_piece;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_parking;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_principale;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $owner_firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $owner_lastname;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $owner_phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $owner_email;

    /**
     * @ORM\OneToMany(targetEntity=Pictures::class, mappedBy="relatedProperty", orphanRemoval=true)
     */
    private $pictures;

    public function __construct()
    {
        $this->pictures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAdresseNumero(): ?int
    {
        return $this->adresse_numero;
    }

    public function setAdresseNumero(?int $adresse_numero): self
    {
        $this->adresse_numero = $adresse_numero;

        return $this;
    }

    public function getAdresseLibelle(): ?string
    {
        return $this->adresse_libelle;
    }

    public function setAdresseLibelle(string $adresse_libelle): self
    {
        $this->adresse_libelle = $adresse_libelle;

        return $this;
    }

    public function getAdresseCp(): ?int
    {
        return $this->adresse_cp;
    }

    public function setAdresseCp(int $adresse_cp): self
    {
        $this->adresse_cp = $adresse_cp;

        return $this;
    }

    public function getAdresseVille(): ?string
    {
        return $this->adresse_ville;
    }

    public function setAdresseVille(string $adresse_ville): self
    {
        $this->adresse_ville = $adresse_ville;

        return $this;
    }

    public function getAdressePays(): ?string
    {
        return $this->adresse_pays;
    }

    public function setAdressePays(string $adresse_pays): self
    {
        $this->adresse_pays = $adresse_pays;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNombrePiece(): ?int
    {
        return $this->nombre_piece;
    }

    public function setNombrePiece(int $nombre_piece): self
    {
        $this->nombre_piece = $nombre_piece;

        return $this;
    }

    public function getNombreParking(): ?int
    {
        return $this->nombre_parking;
    }

    public function setNombreParking(int $nombre_parking): self
    {
        $this->nombre_parking = $nombre_parking;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImagePrincipale(): ?string
    {
        return $this->image_principale;
    }

    public function setImagePrincipale(?string $image_principale): self
    {
        $this->image_principale = $image_principale;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getOwnerFirstname(): ?string
    {
        return $this->owner_firstname;
    }

    public function setOwnerFirstname(?string $owner_firstname): self
    {
        $this->owner_firstname = $owner_firstname;

        return $this;
    }

    public function getOwnerLastname(): ?string
    {
        return $this->owner_lastname;
    }

    public function setOwnerLastname(?string $owner_lastname): self
    {
        $this->owner_lastname = $owner_lastname;

        return $this;
    }

    public function getOwnerPhone(): ?string
    {
        return $this->owner_phone;
    }

    public function setOwnerPhone(?string $owner_phone): self
    {
        $this->owner_phone = $owner_phone;

        return $this;
    }

    public function getOwnerEmail(): ?string
    {
        return $this->owner_email;
    }

    public function setOwnerEmail(?string $owner_email): self
    {
        $this->owner_email = $owner_email;

        return $this;
    }

    /**
     * @return Collection|Pictures[]
     */
    public function getPictures(): Collection
    {
        return $this->pictures;
    }

    public function addPicture(Pictures $picture): self
    {
        if (!$this->pictures->contains($picture)) {
            $this->pictures[] = $picture;
            $picture->setRelatedProperty($this);
        }

        return $this;
    }

    public function removePicture(Pictures $picture): self
    {
        if ($this->pictures->removeElement($picture)) {
            // set the owning side to null (unless already changed)
            if ($picture->getRelatedProperty() === $this) {
                $picture->setRelatedProperty(null);
            }
        }

        return $this;
    }

    /**
     * Generates the magic method
     *
     */
    public function __toString(){
        // to show the name of the Category in the select
        return (string) $this->id;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
