<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\GeneratedValue;
/**
 * @Entity @Table(name="client")
 **/
class Client{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $telephone;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $email;
    /**
     * One client has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte" , mappedBy="client")
     */
    private $compte;
    
  

    //function de constructeur
//     public function __construct(array $data)
//     {
//          $this->compte = new ArrayCollection();
//     }

    public function __construct()
    {
          $this->compte = new ArrayCollection();
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
 /* public function getId(){ return $this->id;}
 public function getNom(){ return $this->nom;}
 public function getPrenom(){ return $this->prenom;}
 public function getTelephone(){ return $this->telephone;}
 public function getAdresse(){ return $this->adresse;}
 public function getEmail(){ return $this->email;} 


// the setters ou mutateur
public function setId($id){ $this->id=$id;}
public function setNom($nom){$this->nom=$nom;}
public function setPrenom($prenom){$this->prenom=$prenom;}
public function setTelephonee($telephone){$this->telephone=$telephone;}
public function setAdresse($adresse){$this->adresse=$adresse;}
public function setEmail($email){$this->email=$email;}
*/


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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * 
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * 
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * 
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        
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
     * 
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        
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
     * 
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        
    }

    /**
     * Get one client has many compte. This is the inverse side.
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set one client has many compte. This is the inverse side.
     *
     * 
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        
    }
}
?>