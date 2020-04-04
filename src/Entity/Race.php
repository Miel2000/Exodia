<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Race
 *
 * @ORM\Table(name="race")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\RaceRepository")
 */
class Race
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
     * @var int
     *
     * @ORM\Column(name="sante", type="integer", nullable=false)
     */
    private $sante;

    /**
     * @var int
     *
     * @ORM\Column(name="`force", type="integer", nullable=false)
     */
    private $force;

    /**
     * @var int
     *
     * @ORM\Column(name="magie", type="integer", nullable=false)
     */
    private $magie;

    /**
     * @var int
     *
     * @ORM\Column(name="defense", type="integer", nullable=false)
     */
    private $defense;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer", nullable=false)
     */
    private $attaque;

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

    public function getSante(): ?int
    {
        return $this->sante;
    }

    public function setSante(int $sante): self
    {
        $this->sante = $sante;

        return $this;
    }

    public function getForce(): ?int
    {
        return $this->force;
    }

    public function setForce(int $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function getMagie(): ?int
    {
        return $this->magie;
    }

    public function setMagie(int $magie): self
    {
        $this->magie = $magie;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getAttaque(): ?int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }

    public function __toString(){
        return $this->libelle;
    }


}
