<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Isolateur
 *
 * @ORM\Table(name="isolateur")
 * @ORM\Entity
 */
class Isolateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="poidIsoPorteur", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidisoporteur;

    /**
     * @var float
     *
     * @ORM\Column(name="poidFilContacte", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidfilcontacte;

    /**
     * @var float
     *
     * @ORM\Column(name="distanceAxe", type="float", precision=10, scale=0, nullable=false)
     */
    private $distanceaxe;



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
     * Set poidisoporteur
     *
     * @param float $poidisoporteur
     * @return Isolateur
     */
    public function setPoidisoporteur($poidisoporteur)
    {
        $this->poidisoporteur = $poidisoporteur;

        return $this;
    }

    /**
     * Get poidisoporteur
     *
     * @return float 
     */
    public function getPoidisoporteur()
    {
        return $this->poidisoporteur;
    }

    /**
     * Set poidfilcontacte
     *
     * @param float $poidfilcontacte
     * @return Isolateur
     */
    public function setPoidfilcontacte($poidfilcontacte)
    {
        $this->poidfilcontacte = $poidfilcontacte;

        return $this;
    }

    /**
     * Get poidfilcontacte
     *
     * @return float 
     */
    public function getPoidfilcontacte()
    {
        return $this->poidfilcontacte;
    }

    /**
     * Set distanceaxe
     *
     * @param float $distanceaxe
     * @return Isolateur
     */
    public function setDistanceaxe($distanceaxe)
    {
        $this->distanceaxe = $distanceaxe;

        return $this;
    }

    /**
     * Get distanceaxe
     *
     * @return float 
     */
    public function getDistanceaxe()
    {
        return $this->distanceaxe;
    }
    
    public function __toString() {
        return $this->poidisoporteur
                ." | ".$this->poidfilcontacte
                ." | ".$this->distanceaxe;
    }
    
}
