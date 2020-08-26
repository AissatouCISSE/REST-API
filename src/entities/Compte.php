<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\GeneratedValue;
// use Doctrine\ORM\Mapping as ORM;
// use Doctrine\ORM\Mapping\ManyToOne;
// use Doctrine\ORM\Mapping\JoinColumn;
// namespace Models;

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
/**
 * @Entity @Table(name="compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $numagence;
    /** @Column(type="string", unique=true) **/
    private $numcompte;
    /** @Column(type="integer") **/
    private $clerib;
     /** @Column(type="integer") **/
     private $solde;
    /**
     * Many compte have one client. This is the owning side.
     * @ManyToOne(targetEntity="Client" , inversedBy="compte")
     * @JoinColumn(name="client_id" , referencedColumnName="id")
     */
    private $client;

    /**
     * One compte has many operation. This is the inverse side.
     * @OneToMany(targetEntity="Operation" , mappedBy="typebeneficiaire")
     */
    private $typebeneficiaire;

    /**
     * One compte has many operation. This is the inverse side.
     * @OneToMany(targetEntity="Operation" , mappedBy="compte")
     */
    private $operation;


    //function de constructeur
    // public function __construct(array $data)
    // {
    //     // $this->hydrate($data);
    // }

    public function __construct()
    {
        // $this->hydrate($data);
        $this->operation = new ArrayCollection();
        $this->typebeneficiaire = new ArrayCollection();
    }

    //function hydrate
    //  public function hydrate(array $data){
    //     foreach ($data as $key => $value) {
    //        $method= 'set'.ucfirst($key);

    //        if(method_exists($this, $method)){
    //            $this->$method($value);
    //        }
    //     }
    // }
    // the getters ou accessur
    /*public function getId(){ return $this->id;}
 public function getNumAgence(){ return $this->numagence;}
 public function getNumCompte(){ return $this->numcompte;}
 public function getCleRib(){ return $this->clerib;}
//  public function getClient(){return $this->client;}
 public function getClient(){return $this->client;}



// the setters ou mutateur
public function setId($id){ $this->id=$id;}
public function setNumAgence($numagence){$this->numagence=$numagence;}
public function setNumCompte($numcompte){$this->numcompte=$numcompte;}
public function setCleRib($clerib){$this->clerib=$clerib;}
// public function setClient($client){$this->client=$client;}
public function setClient($client){$this->client=$client;}*/

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * 
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of numagence
     */ 
    public function getNumagence()
    {
        return $this->numagence;
    }

    /**
     * Set the value of numagence
     *
     * 
     */ 
    public function setNumagence($numagence)
    {
        $this->numagence = $numagence;
    }

    /**
     * Get the value of numcompte
     */ 
    public function getNumcompte()
    {
        return $this->numcompte;
    }

    /**
     * Set the value of numcompte
     *
     * 
     */ 
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;
    }

    /**
     * Get the value of clerib
     */ 
    public function getClerib()
    {
        return $this->clerib;
    }

    /**
     * Set the value of clerib
     *
     * 
     */ 
    public function setClerib($clerib)
    {
        $this->clerib = $clerib;
    }

    /**
     * Get many compte have one client. This is the owning side.
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set many compte have one client. This is the owning side.
     *
     * 
     */ 
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * Get one compte has many operation. This is the inverse side.
     */ 
    public function getTypebeneficiaire()
    {
        return $this->typebeneficiaire;
    }

    /**
     * Set one compte has many operation. This is the inverse side.
     *
     * 
     */ 
    public function setTypebeneficiaire($typebeneficiaire)
    {
        $this->typebeneficiaire = $typebeneficiaire;
    }

    /**
     * Get one compte has many operation. This is the inverse side.
     */ 
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set one compte has many operation. This is the inverse side.
     *
     * 
     */ 
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

     /**
      * Get the value of solde
      */ 
     public function getSolde()
     {
          return $this->solde;
     }

     /**
      * Set the value of solde
      *
      *
      */ 
     public function setSolde($solde)
     {
          $this->solde = $solde;

          
     }
}
