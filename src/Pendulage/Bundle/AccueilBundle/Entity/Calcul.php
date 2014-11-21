<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calcul
 *
 * @ORM\Table(name="calcul", indexes={@ORM\Index(name="fk_calcul_ohle_idx", columns={"ohle_id_ohle"})})
 * @ORM\Entity
 */
class Calcul
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_calcul", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCalcul;

    /**
     * @var \Ohle
     *
     * @ORM\ManyToOne(targetEntity="Ohle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ohle_id_ohle", referencedColumnName="id_ohle")
     * })
     */
    private $ohleOhle;



    /**
     * Get idCalcul
     *
     * @return integer 
     */
    public function getIdCalcul()
    {
        return $this->idCalcul;
    }

    /**
     * Set ohleOhle
     *
     * @param \Pendulage\Bundle\AccueilBundle\Entity\Ohle $ohleOhle
     * @return Calcul
     */
    public function setOhleOhle(\Pendulage\Bundle\AccueilBundle\Entity\Ohle $ohleOhle = null)
    {
        $this->ohleOhle = $ohleOhle;

        return $this;
    }

    /**
     * Get ohleOhle
     *
     * @return \Pendulage\Bundle\AccueilBundle\Entity\Ohle 
     */
    public function getOhleOhle()
    {
        return $this->ohleOhle;
    }
}
