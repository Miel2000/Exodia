<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table(name="boutique", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="fk_BOUTIQUE_ARMURE_idx", columns={"ARMURE_id"}), @ORM\Index(name="fk_BOUTIQUE_ARME_idx", columns={"ARME_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\BoutiqueRepository")
 */
class Boutique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \Arme
     *
     * @ORM\ManyToOne(targetEntity="Arme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ARME_id", referencedColumnName="id")
     * })
     */
    private $arme;

    /**
     * @var \Armure
     *
     * @ORM\ManyToOne(targetEntity="Armure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ARMURE_id", referencedColumnName="id")
     * })
     */
    private $armure;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

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

    public function getArme(): ?Arme
    {
        return $this->arme;
    }

    public function setArme(?Arme $arme): self
    {
        $this->arme = $arme;

        return $this;
    }

    public function getArmure(): ?Armure
    {
        return $this->armure;
    }

    public function setArmure(?Armure $armure): self
    {
        $this->armure = $armure;

        return $this;
    }


}
