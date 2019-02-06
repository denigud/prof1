<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReadingRepository")
 */
class Reading
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $meterid;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $reading;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeterid(): ?int
    {
        return $this->meterid;
    }

    public function setMeterId(int $meterid): self
    {
        $this->meterid = $meterid;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getReading(): ?float
    {
        return $this->reading;
    }

    public function setReading(float $reading): self
    {
        $this->reading = $reading;

        return $this;
    }
}
