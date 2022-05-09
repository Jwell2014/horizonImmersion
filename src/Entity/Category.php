<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Images;

    #[ORM\Column(type: 'string', length: 255)]
    private $Videos;

    #[ORM\Column(type: 'string', length: 255)]
    private $Archives;

    #[ORM\Column(type: 'string', length: 255)]
    private $Enigmes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImages(): ?string
    {
        return $this->Images;
    }

    public function setImages(string $Images): self
    {
        $this->Images = $Images;

        return $this;
    }

    public function getVideos(): ?string
    {
        return $this->Videos;
    }

    public function setVideos(string $Videos): self
    {
        $this->Videos = $Videos;

        return $this;
    }

    public function getArchives(): ?string
    {
        return $this->Archives;
    }

    public function setArchives(string $Archives): self
    {
        $this->Archives = $Archives;

        return $this;
    }

    public function getEnigmes(): ?string
    {
        return $this->Enigmes;
    }

    public function setEnigmes(string $Enigmes): self
    {
        $this->Enigmes = $Enigmes;

        return $this;
    }
}
