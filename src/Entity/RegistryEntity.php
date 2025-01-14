<?php

namespace App\Entity;


use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
class RegistryEntity {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private ?int $id;
    
    #[Assert\NotBlank]
    #[ORM\Column(type:"datetime_immutable",options:["default"=>"CURRENT_TIMESTAMP"])]
    private ?\DateTimeImmutable $createdAt;
   
    #[Assert\NotBlank]
    #[ORM\Column(type:"string")]
    private string $username;
    
    #[Assert\NotBlank]
    #[ORM\Column(type:"string")]
    private string $password;

    #[Assert\NotBlank]
    #[ORM\Column(type:"string")]
    private string $vorname;
    
    #[Assert\NotBlank]
    #[ORM\Column(type:"string")]
    private string $nachname;

    #[Assert\NotBlank]
    #[ORM\Column(type:"string")]
    private string $adresse;

    #[Assert\NotBlank]
    #[ORM\Column(type:"integer")]
    private int $plz;

    #[Assert\NotBlank]
    #[ORM\Column(type:"string")]
    private string $wohnort;

    #[Assert\NotBlank]
    #[ORM\Column(type: "datetime", nullable:true)]
    private ?\DateTime $geburtsdatum;

    #[Assert\NotBlank]
    #[Assert\Email]
    #[ORM\Column(type:"string")]
    private ?string $email;
 
    
    public function __construct()
{
    $this->createdAt = new \DateTimeImmutable();

}

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of vorname
     */ 
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set the value of vorname
     *
     * @return  self
     */ 
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get the value of nachname
     */ 
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set the value of nachname
     *
     * @return  self
     */ 
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of wohnort
     */ 
    public function getWohnort()
    {
        return $this->wohnort;
    }

    /**
     * Set the value of wohnort
     *
     * @return  self
     */ 
    public function setWohnort($wohnort)
    {
        $this->wohnort = $wohnort;

        return $this;
    }


    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }

    /**
     * Set the value of geburtsdatum
     *
     * @return  self
     */ 
    public function setGeburtsdatum($geburtsdatum)
    {
        $this->geburtsdatum = $geburtsdatum;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        
    }

    /**
     * Get the value of plz
     */ 
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Set the value of plz
     *
     * @return  self
     */ 
    public function setPlz($plz)
    {
        $this->plz = $plz;

        return $this;
    }
}