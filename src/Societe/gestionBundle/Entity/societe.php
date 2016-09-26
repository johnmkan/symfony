<?php 
namespace Societe\gestionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class societe{
	
	/**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;
	/**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer $num_siret
     *
     * @ORM\Column(name="num_siret", type="integer", length=25)
     */
    private $num_siret;
    /**
     * @var string $adresse
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string $responsable
     *
     * @ORM\Column(name="responsable", type="string", length=255)
     */
    private $responsable;
    /**
     * @var string $raison_social
     *
     * @ORM\Column(name="raison_social", type="string", length=255)
     */
    private $raison_social;
    /**
     * @var date $cate_creation
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $date_creation;
     /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
 
    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
 
    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set num_siret
     *
     * @param string $num_siret
     */
    public function setNumSiret($num_siret)
    {
        $this->num_siret = $num_siret;
    }
 
    /**
     * Get num_siret
     *
     * @return string 
     */
    public function getNumSiret()
    {
        return $this->num_siret;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
 
    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }
 
    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set raison_social
     *
     * @param string $raison_social
     */
    public function setRaison($raison_social)
    {
        $this->raison_social = $raison_social;
    }
 
    /**
     * Get raison_social
     *
     * @return string 
     */
    public function getRaison()
    {
        return $this->raison_social;
    }

    /**
     * Set date_creation
     *
     * @param string $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }
 
    /**
     * Get date_creation
     *
     * @return string 
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set raison_social
     *
     * @param string $raisonSocial
     * @return societe
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raison_social = $raisonSocial;

        return $this;
    }

    /**
     * Get raison_social
     *
     * @return string 
     */
    public function getRaisonSocial()
    {
        return $this->raison_social;
    }
}
