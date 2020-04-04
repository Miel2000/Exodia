<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClasseRepository")
 */
class Classe
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
     * @ORM\Column(name="decription", type="string", length=255, nullable=false)
     */
    private $decription;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="savoir", type="integer", nullable=true)
     */
    private $savoir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physique", type="integer", nullable=true)
     */
    private $physique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dexterite", type="integer", nullable=true)
     */
    private $dexterite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sens", type="integer", nullable=true)
     */
    private $sens;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDecription(): ?string
    {
        return $this->decription;
    }

    public function setDecription(string $decription): self
    {
        $this->decription = $decription;

        return $this;
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

    public function getSavoir(): ?int
    {
        return $this->savoir;
    }

    public function setSavoir(?int $savoir): self
    {
        $this->savoir = $savoir;

        return $this;
    }

    public function getPhysique(): ?int
    {
        return $this->physique;
    }

    public function setPhysique(?int $physique): self
    {
        $this->physique = $physique;

        return $this;
    }

    public function getDexterite(): ?int
    {
        return $this->dexterite;
    }

    public function setDexterite(?int $dexterite): self
    {
        $this->dexterite = $dexterite;

        return $this;
    }

    public function getSens(): ?int
    {
        return $this->sens;
    }

    public function setSens(?int $sens): self
    {
        $this->sens = $sens;

        return $this;
    }

    public function __toString(){
        return $this->libelle;
    }


}
