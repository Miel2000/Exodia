<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Personnage
 *
 * @ORM\Table(name="personnage", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="fk_PERSONNAGE_RACE_idx", columns={"RACE_id"}), @ORM\Index(name="fk_PERSONNAGE_ARMURE_idx", columns={"ARMURE_id"}), @ORM\Index(name="fk_PERSONNAGE_ARME_idx", columns={"ARME_id"}), @ORM\Index(name="fk_PERSONNAGE_CLASSE_idx", columns={"CLASSE_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PersonnageRepository")
 */
class Personnage
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="argent", type="integer", nullable=false)
     */
    private $argent;

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

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CLASSE_id", referencedColumnName="id")
     * })
     */
    private $classe;

    /**
     * @var \Race
     *
     * @ORM\ManyToOne(targetEntity="Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RACE_id", referencedColumnName="id")
     * })
     */
    private $race;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getArgent(): ?int
    {
        return $this->argent;
    }

    public function setArgent(int $argent): self
    {
        $this->argent = $argent;

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

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }


}
