<?php

namespace App\Entity;

use App\Repository\NavigationListeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NavigationListeRepository::class)
 */
class NavigationListe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $actif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_de_page;

    /**
     * @ORM\ManyToOne(targetEntity=Navigation::class, inversedBy="navigationListes")
     */
    private $navigation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $target;

    /**
     * @ORM\Column(type="boolean")
     */
    private $no_follow;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_cms;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_news;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_parent;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): self
    {
        $this->actif = $actif;

        return $this;
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

    public function getTypeDePage(): ?string
    {
        return $this->type_de_page;
    }

    public function setTypeDePage(string $type_de_page): self
    {
        $this->type_de_page = $type_de_page;

        return $this;
    }

    public function getNavigation(): ?navigation
    {
        return $this->navigation;
    }

    public function setNavigation(?navigation $navigation): self
    {
        $this->navigation = $navigation;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getNoFollow(): ?bool
    {
        return $this->no_follow;
    }

    public function setNoFollow(bool $no_follow): self
    {
        $this->no_follow = $no_follow;

        return $this;
    }

    public function getIdCms(): ?int
    {
        return $this->id_cms;
    }

    public function setIdCms(?int $id_cms): self
    {
        $this->id_cms = $id_cms;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getIdNews(): ?int
    {
        return $this->id_news;
    }

    public function setIdNews(?int $id_news): self
    {
        $this->id_news = $id_news;

        return $this;
    }

    public function getIdParent(): ?int
    {
        return $this->id_parent;
    }

    public function setIdParent(?int $id_parent): self
    {
        $this->id_parent = $id_parent;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }
}
