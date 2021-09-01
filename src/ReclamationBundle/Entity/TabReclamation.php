<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * TabReclamation
 *
 * @ORM\Table(name="tab_reclamation")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\TabReclamationRepository")
 */
class TabReclamation
{

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_demande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemande;

    // * snip *

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Demande", type="string", length=255 )
     *  @Assert\Length(min=3)
     *
     */
    private $nomDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Demande", type="string", length=255)
     *  @Assert\Length(min=4)
     */

    private $prenomDemande;




    /**
     * @var string
     *
     * @ORM\Column(name="Num_Tel_Demande", type="string", length=255)
     */
    private $numTelDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="Post_Demande", type="string", length=255)
     * @Assert\Length(min=10)

     */
    private $postDemande;
    /**
     * @var string
     *
     * @ORM\Column(name="Cin_Demande", type="string", length=255)
     * @Assert\Length(min=6)
     */
    private $cinDemande;

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer"  )
     */
    private $rating ;



    /**
     * Set nomDemande
     *
     * @param string $nomDemande
     *
     * @return TabReclamation
     */
    public function setNomDemande($nomDemande)
    {
        $this->nomDemande = $nomDemande;

        return $this;
    }

    /**
     * Get nomDemande
     *
     * @return string
     */
    public function getNomDemande()
    {
        return $this->nomDemande;
    }

    /**
     * Set prenomDemande
     *
     * @param string $prenomDemande
     *
     * @return TabReclamation
     */
    public function setPrenomDemande($prenomDemande)
    {
        $this->prenomDemande = $prenomDemande;

        return $this;
    }

    /**
     * Get prenomDemande
     *
     * @return string
     */
    public function getPrenomDemande()
    {
        return $this->prenomDemande;
    }

    /**
     * Set idDemande
     *
     * @param integer $idDemande
     *
     * @return TabReclamation
     */
    public function setIdDemande($idDemande)
    {
        $this->idDemande = $idDemande;

        return $this;
    }

    /**
     * Get idDemande
     *
     * @return int
     */
    public function getIdDemande()
    {
        return $this->idDemande;
    }

    /**
     * Set numTelDemande
     *
     * @param string $numTelDemande
     *
     * @return TabReclamation
     */
    public function setNumTelDemande($numTelDemande)
    {
        $this->numTelDemande = $numTelDemande;

        return $this;
    }

    /**
     * Get numTelDemande
     *
     * @return string
     */
    public function getNumTelDemande()
    {
        return $this->numTelDemande;
    }

    /**
     * Set postDemande
     *
     * @param string $postDemande
     *
     * @return TabReclamation
     */
    public function setPostDemande($postDemande)
    {
        $this->postDemande = $postDemande;

        return $this;
    }

    /**
     * Get postDemande
     *
     * @return string
     */
    public function getPostDemande()
    {
        return $this->postDemande;
    }


    /**
     * Set cinDemande
     *
     * @param string $cinDemande
     *
     * @return TabReclamation
     */
    public function setCinDemande($cinDemande)
    {
        $this->cinDemande = $cinDemande;

        return $this;
    }

    /**
     * Get cinDemande
     *
     * @return string
     */
    public function getCinDemande()
    {
        return $this->cinDemande;
    }
}




