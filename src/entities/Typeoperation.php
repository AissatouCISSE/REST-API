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
 * @Entity @Table(name="typeoperation")
 **/
class Typeoperation{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    /**
     * Many typeoperation has many operation. This is the inverse side.
     * @OneToMany(targetEntity="Operation" , mappedBy="typeoperation")
     */
    private $operation;
    
  

    //function de constructeur
//     public function __construct(array $data)
//     {
//          $this->compte = new ArrayCollection();
//     }

    public function __construct()
    {
          $this->operation = new ArrayCollection();
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
 public function getLibelle(){ return $this->libelle;}
 

// the setters ou mutateur
public function setId($id){ $this->id=$id;}
public function setLibelle($libelle){$this->libelle=$libelle;}
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * 
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        
    }

    /**
     * Get many typeoperation has many operation. This is the inverse side.
     */ 
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set many typeoperation has many operation. This is the inverse side.
     *
     * 
     */ 
    public function setOperation($operation)
    {
        $this->operation = $operation;

        
    }
}
?>