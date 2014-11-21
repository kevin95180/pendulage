<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Support1
 *
 * @ORM\Table(name="support1", indexes={@ORM\Index(name="fk_support1_AllSupport1_idx", columns={"supportNom"})})
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
     * @var \Allsupport
     *
     * @ORM\ManyToOne(targetEntity="Allsupport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supportNom", referencedColumnName="nomSupport")
     * })
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
     * @param \Pendulage\Bundle\AccueilBundle\Entity\Allsupport $supportnom
     * @return Support1
     */
    public function setSupportnom(\Pendulage\Bundle\AccueilBundle\Entity\Allsupport $supportnom = null)
    {
        $this->supportnom = $supportnom;

        return $this;
    }

    /**
     * Get supportnom
     *
     * @return \Pendulage\Bundle\AccueilBundle\Entity\Allsupport 
     */
    public function getSupportnom()
    {
        return $this->supportnom;
    }
    
//    public function __toString() {
//        return $this->supportnom;
//    }
    
}
