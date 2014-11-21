<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allsupport
 *
 * @ORM\Table(name="allsupport")
 * @ORM\Entity
 */
class Allsupport
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomSupport", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomsupport;



    /**
     * Get nomsupport
     *
     * @return string 
     */
    public function getNomsupport()
    {
        return $this->nomsupport;
    }
    
    public function __toString() {
        return $this->nomsupport;
    }

}
