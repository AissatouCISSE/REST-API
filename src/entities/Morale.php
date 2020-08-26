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
 * @Entity @Table(name="morale")
 **/
class Morale{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $raisonsociale;
    /** @Column(type="string") **/
    private $nomemployeur;
    /** @Column(type="integer") **/
    private $rc;
    /** @Column(type="integer") **/
    private $ninea;
    /**
     * Many clientMorale has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte" , mappedBy="moral")
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
 public function getId(){ return $this->id;}
 public function getRaisonSociale(){ return $this->raisonsociale;}
 public function getNomEmployeur(){ return $this->nomemployeur;}
 public function getRc(){ return $this->rc;}
 public function getNinea(){ return $this->ninea;}


// the setters ou mutateur
public function setId($id){ $this->id=$id;}
public function setRaisonSociale($raisonsociale){$this->raisonsociale=$raisonsociale;}
public function setNomEmployeur($nomemployeur){$this->nomemployeur=$nomemployeur;}
public function setRc($rc){$this->rc=$rc;}
public function setNinea($ninea){$this->ninea=$ninea;}
}
?>