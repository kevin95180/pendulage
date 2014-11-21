<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Support1
 *
 * @ORM\Table(name="support1")
 * @ORM\Entity
 */
class Support1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_support", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupport;

    /**
     * @var string
     *
     * @ORM\Column(name="supportNom", type="string", length=10, nullable=false)
     */
    private $supportnom;



    /**
     * Get idSupport
     *
     * @return integer 
     */
    public function getIdSupport()
    {
        return $this->idSupport;
    }

    /**
     * Set supportnom
     *
     * @param string $supportnom
     * @return Support1
     */
    public function setSupportnom($supportnom)
    {
        $this->supportnom = $supportnom;

        return $this;
    }

    /**
     * Get supportnom
     *
     * @return string 
     */
    public function getSupportnom()
    {
        return $this->supportnom;
    }
    
    public function __toString() {
        return $this->supportnom;
    }
    
}
