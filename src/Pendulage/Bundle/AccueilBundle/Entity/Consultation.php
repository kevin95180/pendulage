<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsultation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="portee", type="integer", nullable=false)
     */
    private $portee;

    /**
     * @var float
     *
     * @ORM\Column(name="repartition1", type="float", precision=10, scale=0, nullable=false)
     */
    private $repartition1;

    /**
     * @var float
     *
     * @ORM\Column(name="repartition2", type="float", precision=10, scale=0, nullable=false)
     */
    private $repartition2;



    /**
     * Get idConsultation
     *
     * @return integer 
     */
    public function getIdConsultation()
    {
        return $this->idConsultation;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Consultation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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
     * Set portee
     *
     * @param integer $portee
     * @return Consultation
     */
    public function setPortee($portee)
    {
        $this->portee = $portee;

        return $this;
    }

    /**
     * Get portee
     *
     * @return integer 
     */
    public function getPortee()
    {
        return $this->portee;
    }

    /**
     * Set repartition1
     *
     * @param float $repartition1
     * @return Consultation
     */
    public function setRepartition1($repartition1)
    {
        $this->repartition1 = $repartition1;

        return $this;
    }

    /**
     * Get repartition1
     *
     * @return float 
     */
    public function getRepartition1()
    {
        return $this->repartition1;
    }

    /**
     * Set repartition2
     *
     * @param float $repartition2
     * @return Consultation
     */
    public function setRepartition2($repartition2)
    {
        $this->repartition2 = $repartition2;

        return $this;
    }

    /**
     * Get repartition2
     *
     * @return float 
     */
    public function getRepartition2()
    {
        return $this->repartition2;
    }
}
