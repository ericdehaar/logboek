<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userID;

    /**
     * @ORM\Column(type="integer")
     */
    private $brief_NR;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\Column(type="integer")
     */
    private $chauffeurID;

    /**
     * @ORM\Column(type="integer")
     */
    private $truckID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $kubs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $laadplaats;

    /**
     * @ORM\Column(type="time")
     */
    private $vertrektijd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bestemming;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserID(): ?string
    {
        return $this->userID;
    }

    public function setUserID(string $userID): self
    {
        $this->userID = $userID;

        return $this;
    }

    public function getBriefNR(): ?int
    {
        return $this->brief_NR;
    }

    public function setBriefNR(int $brief_NR): self
    {
        $this->brief_NR = $brief_NR;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getChauffeurID(): ?int
    {
        return $this->chauffeurID;
    }

    public function setChauffeurID(int $chauffeurID): self
    {
        $this->chauffeurID = $chauffeurID;

        return $this;
    }

    public function getTruckID(): ?int
    {
        return $this->truckID;
    }

    public function setTruckID(int $truckID): self
    {
        $this->truckID = $truckID;

        return $this;
    }

    public function getKubs(): ?string
    {
        return $this->kubs;
    }

    public function setKubs(string $kubs): self
    {
        $this->kubs = $kubs;

        return $this;
    }

    public function getLaadplaats(): ?string
    {
        return $this->laadplaats;
    }

    public function setLaadplaats(string $laadplaats): self
    {
        $this->laadplaats = $laadplaats;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->vertrektijd;
    }

    public function setVertrektijd(\DateTimeInterface $vertrektijd): self
    {
        $this->vertrektijd = $vertrektijd;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->bestemming;
    }

    public function setBestemming(string $bestemming): self
    {
        $this->bestemming = $bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
