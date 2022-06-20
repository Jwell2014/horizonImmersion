<?php

namespace App\Entity;

use App\Repository\DossierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierRepository::class)]
class Dossier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nom;

    #[ORM\Column(type: 'boolean')]
    private $isActive;

    #[ORM\OneToMany(mappedBy: 'DossierParent', targetEntity: Fichier::class)]
    private $imgSats;

    public function __construct()
    {
        $this->imgSats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection<int, Fichier>
     */
    public function getImgSats(): Collection
    {
        return $this->imgSats;
    }

    public function addImgSat(Fichier $fichier): self
    {
        if (!$this->imgSats->contains($fichier)) {
            $this->imgSats[] = $fichier;
            $fichier->setDossierParent($this);
        }

        return $this;
    }

    public function removeImgSat(Fichier $fichier): self
    {
        if ($this->imgSats->removeElement($fichier)) {
            // set the owning side to null (unless already changed)
            if ($fichier->getDossierParent() === $this) {
                $fichier->setDossierParent(null);
            }
        }

        return $this;
    }
}
