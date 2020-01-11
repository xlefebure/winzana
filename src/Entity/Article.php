<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 2,
     *     max = 60,
     *     minMessage = "La taille du titre doit être comprise entre 2 et 60 caractères",
     *     minMessage = "La taille du titre doit être comprise entre 2 et 60 caractères"
     * )
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 2,
     *     max = 50,
     *     minMessage = "La taille du prénom doit être comprise entre 2 et 50 caractères",
     *     minMessage = "La taille du prénom doit être comprise entre 2 et 50 caractères"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 2,
     *     max = 50,
     *     minMessage = "La taille du nom doit être comprise entre 2 et 50 caractères",
     *     minMessage = "La taille du nom doit être comprise entre 2 et 50 caractères"
     * )
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 2,
     *     max = 255,
     *     minMessage = "La taille de la ville doit être comprise entre 2 et 255 caractères",
     *     minMessage = "La taille de la ville doit être comprise entre 2 et 255 caractères"
     * )
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $updated_at;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email(message = "Le format de l'email est incorrect")
     * @Assert\Length(
     *     min = 2,
     *     max = 255,
     *     minMessage = "La taille de l'email doit être comprise entre 2 et 255 caractères",
     *     minMessage = "La taille de l'email doit être comprise entre 2 et 255 caractères"
     * )
     */
    private $email;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
