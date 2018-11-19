<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $nom;

    public function getId()
    {
        return $this->id;
    }

    public function setNom($nom)
    {
      $this->nom= $nom;
    }

    public function getNom()
    {
      return $this->nom;
    }
}
