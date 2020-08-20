<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity()
 * @ApiResource(
 *     collectionOperations={
 *     "get"={
 *     "normalization_context"={"groups"={"customer_listing:write"}}
 *     },
 *     "post"
 *      },
 *     itemOperations={
 *     "get"={
 *          "normalization_context"={"groups"={"customer_listing:read", "customer_listing:item:get"}},
 *          "access_control" = "is_granted('VIEW', previous_object)"
 *     },
 *     "patch"={
 *          "access_control" = "is_granted('EDIT', previous_object)"
 *     },
 *     "delete"={
 *          "access_control" = "is_granted('DELETE', previous_object)"
 *     },
 *     "put"
 *     },
 *     normalizationContext={"groups"={"customer_listing:read"}},
 *     denormalizationContext={"groups"={"customer_listing:write"}}
 * )
 */
class Customer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user:read","customer_listing:read","customer_listing:write"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user:read","customer_listing:read","customer_listing:write"})
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="customers")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"user:read","customer_listing:read","customer_listing:write"})
     */
    private $user;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
