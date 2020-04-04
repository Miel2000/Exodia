<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arme
 *
 * @ORM\Table(name="arme", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ArmeRepository")
 */
class Arme
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonus_physique", type="integer", nullable=true)
     */
    private $bonusPhysique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonus_savoir", type="integer", nullable=true)
     */
    private $bonusSavoir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonus_dexterite", type="integer", nullable=true)
     */
    private $bonusDexterite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonus_sens", type="integer", nullable=true)
     */
    private $bonusSens;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

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

    public function getBonusPhysique(): ?int
    {
        return $this->bonusPhysique;
    }

    public function setBonusPhysique(?int $bonusPhysique): self
    {
        $this->bonusPhysique = $bonusPhysique;

        return $this;
    }

    public function getBonusSavoir(): ?int
    {
        return $this->bonusSavoir;
    }

    public function setBonusSavoir(?int $bonusSavoir): self
    {
        $this->bonusSavoir = $bonusSavoir;

        return $this;
    }

    public function getBonusDexterite(): ?int
    {
        return $this->bonusDexterite;
    }

    public function setBonusDexterite(?int $bonusDexterite): self
    {
        $this->bonusDexterite = $bonusDexterite;

        return $this;
    }

    public function getBonusSens(): ?int
    {
        return $this->bonusSens;
    }

    public function setBonusSens(?int $bonusSens): self
    {
        $this->bonusSens = $bonusSens;

        return $this;
    }

      public function __toString(){
        return $this->libelle;
    }


}
