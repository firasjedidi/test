<?php

namespace App\Entity;

use App\Repository\GestionCatgoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GestionCatgoriesRepository::class)
 */
class GestionCatgories
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
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_simplifiee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meta_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meta_mot_cles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meta_titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\OneToMany(targetEntity=GestionActualites::class, mappedBy="categorie_id")
     */
    private $gestionActualites;

    public function __construct()
    {
        $this->gestionActualites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getUrlSimplifiee(): ?string
    {
        return $this->url_simplifiee;
    }

    public function setUrlSimplifiee(string $url_simplifiee): self
    {
        $this->url_simplifiee = $url_simplifiee;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->meta_description;
    }

    public function setMetaDescription(string $meta_description): self
    {
        $this->meta_description = $meta_description;

        return $this;
    }

    public function getMetaMotCles(): ?string
    {
        return $this->meta_mot_cles;
    }

    public function setMetaMotCles(string $meta_mot_cles): self
    {
        $this->meta_mot_cles = $meta_mot_cles;

        return $this;
    }

    public function getMetaTitre(): ?string
    {
        return $this->meta_titre;
    }

    public function setMetaTitre(string $meta_titre): self
    {
        $this->meta_titre = $meta_titre;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return Collection<int, GestionActualites>
     */
    public function getGestionActualites(): Collection
    {
        return $this->gestionActualites;
    }

    public function addGestionActualite(GestionActualites $gestionActualite): self
    {
        if (!$this->gestionActualites->contains($gestionActualite)) {
            $this->gestionActualites[] = $gestionActualite;
            $gestionActualite->setCategorieId($this);
        }

        return $this;
    }

    public function removeGestionActualite(GestionActualites $gestionActualite): self
    {
        if ($this->gestionActualites->removeElement($gestionActualite)) {
            // set the owning side to null (unless already changed)
            if ($gestionActualite->getCategorieId() === $this) {
                $gestionActualite->setCategorieId(null);
            }
        }

        return $this;
    }

}
