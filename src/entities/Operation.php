<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\GeneratedValue;
// use Doctrine\ORM\Mapping as ORM;
// use Doctrine\ORM\Mapping\ManyToOne;
// use Doctrine\ORM\Mapping\JoinColumn;
// namespace Models;
                              
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
/**
 * @Entity @Table(name="operation")
 **/
class Operation{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="integer") **/
    private $montant;
    /** @Column(type="string") **/
    private $date;

    /**
     * Many Opration have one Type. This is the owning side.
     * @ManyToOne(targetEntity="Typeoperation" , inversedBy="operation")
     * @JoinColumn(name="typeoperation_id" , referencedColumnName="id")
     */
    private $typeoperation;

     /**
     * Many Opration have one Type. This is the owning side.
     * @ManyToOne(targetEntity="Compte" , inversedBy="typebeneficiaire")
     * @JoinColumn(name="typebeneficiaire_id" , referencedColumnName="id")
     */
    private $typebeneficiaire;
   
    /**
     * Many operation have one compte. This is the owning side.
     * @ManyToOne(targetEntity="Compte" , inversedBy="operation")
     * @JoinColumn(name="compte_id" , referencedColumnName="id")
     */
    private $compte;
  

    //function de constructeur
    // public function __construct(array $data)
    // {
    //     // $this->hydrate($data);
    // }

    public function __construct()
    {
        // $this->hydrate($data);
    }

 
/*  // the getters ou accessur
 public function getId(){ return $this->id;}
 public function getMontant(){ return $this->montant;}
 public function getTypeoperation(){ return $this->typeoperation;}
 public function getTypebeneficiaire(){return $this->typebeneficiaire;}
 public function getCompte(){return $this->compte;}
 public function getDAte(){ return $this->date;}



// the setters ou mutateur
public function setId($id){ $this->id=$id;}
public function setMontant($montant){$this->montant=$montant;}
public function setTypeoperation($typeoperation){$this->typeoperation=$typeoperation;}
public function setTypebeneficiaire($typebeneficiaire){$this->typebeneficiaire=$typebeneficiaire;}
public function setCompte($compte){$this->compte=$compte;}
public function setDate($date){$this->date=$date;} */

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
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * 
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * 
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        
    }

    /**
     * Get many Opration have one Type. This is the owning side.
     */ 
    public function getTypeoperation()
    {
        return $this->typeoperation;
    }

    /**
     * Set many Opration have one Type. This is the owning side.
     *
     * 
     */ 
    public function setTypeoperation($typeoperation)
    {
        $this->typeoperation = $typeoperation;

        
    }

    /**
     * Get many Opration have one Type. This is the owning side.
     */ 
    public function getTypebeneficiaire()
    {
        return $this->typebeneficiaire;
    }

    /**
     * Set many Opration have one Type. This is the owning side.
     *
     * 
     */ 
    public function setTypebeneficiaire($typebeneficiaire)
    {
        $this->typebeneficiaire = $typebeneficiaire;

        
    }

    /**
     * Get many operation have one compte. This is the owning side.
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set many operation have one compte. This is the owning side.
     *
     * 
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        
    }
}