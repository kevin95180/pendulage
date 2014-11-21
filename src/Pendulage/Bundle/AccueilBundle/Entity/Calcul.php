<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calcul
 *
 * @ORM\Table(name="calcul", indexes={@ORM\Index(name="fk_calcul_ohle_idx", columns={"ohle_id_ohle"}), @ORM\Index(name="fk_calcul_support1_idx", columns={"support_id_support"})})
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
     * @var float
     *
     * @ORM\Column(name="spanLenth", type="float", precision=10, scale=0, nullable=false)
     */
    private $spanlenth;

    /**
     * @var float
     *
     * @ORM\Column(name="sysHeightLeft", type="float", precision=10, scale=0, nullable=false)
     */
    private $sysheightleft;

    /**
     * @var float
     *
     * @ORM\Column(name="sysHeightRight", type="float", precision=10, scale=0, nullable=false)
     */
    private $sysheightright;

    /**
     * @var float
     *
     * @ORM\Column(name="intendedSag", type="float", precision=10, scale=0, nullable=false)
     */
    private $intendedsag;

    /**
     * @var float
     *
     * @ORM\Column(name="dropperRepartition", type="float", precision=10, scale=0, nullable=false)
     */
    private $dropperrepartition;

    /**
     * @var float
     *
     * @ORM\Column(name="distanceMinimun", type="float", precision=10, scale=0, nullable=false)
     */
    private $distanceminimun;

    /**
     * @var float
     *
     * @ORM\Column(name="distanceMaximun", type="float", precision=10, scale=0, nullable=false)
     */
    private $distancemaximun;

    /**
     * @var float
     *
     * @ORM\Column(name="distanceAxis", type="float", precision=10, scale=0, nullable=false)
     */
    private $distanceaxis;

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
     * @var \Support
     *
     * @ORM\ManyToOne(targetEntity="Support")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="support_id_support", referencedColumnName="id_support")
     * })
     */
    private $supportSupport;



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
     * Set spanlenth
     *
     * @param float $spanlenth
     * @return Calcul
     */
    public function setSpanlenth($spanlenth)
    {
        $this->spanlenth = $spanlenth;

        return $this;
    }

    /**
     * Get spanlenth
     *
     * @return float 
     */
    public function getSpanlenth()
    {
        return $this->spanlenth;
    }

    /**
     * Set sysheightleft
     *
     * @param float $sysheightleft
     * @return Calcul
     */
    public function setSysheightleft($sysheightleft)
    {
        $this->sysheightleft = $sysheightleft;

        return $this;
    }

    /**
     * Get sysheightleft
     *
     * @return float 
     */
    public function getSysheightleft()
    {
        return $this->sysheightleft;
    }

    /**
     * Set sysheightright
     *
     * @param float $sysheightright
     * @return Calcul
     */
    public function setSysheightright($sysheightright)
    {
        $this->sysheightright = $sysheightright;

        return $this;
    }

    /**
     * Get sysheightright
     *
     * @return float 
     */
    public function getSysheightright()
    {
        return $this->sysheightright;
    }

    /**
     * Set intendedsag
     *
     * @param float $intendedsag
     * @return Calcul
     */
    public function setIntendedsag($intendedsag)
    {
        $this->intendedsag = $intendedsag;

        return $this;
    }

    /**
     * Get intendedsag
     *
     * @return float 
     */
    public function getIntendedsag()
    {
        return $this->intendedsag;
    }

    /**
     * Set dropperrepartition
     *
     * @param float $dropperrepartition
     * @return Calcul
     */
    public function setDropperrepartition($dropperrepartition)
    {
        $this->dropperrepartition = $dropperrepartition;

        return $this;
    }

    /**
     * Get dropperrepartition
     *
     * @return float 
     */
    public function getDropperrepartition()
    {
        return $this->dropperrepartition;
    }

    /**
     * Set distanceminimun
     *
     * @param float $distanceminimun
     * @return Calcul
     */
    public function setDistanceminimun($distanceminimun)
    {
        $this->distanceminimun = $distanceminimun;

        return $this;
    }

    /**
     * Get distanceminimun
     *
     * @return float 
     */
    public function getDistanceminimun()
    {
        return $this->distanceminimun;
    }

    /**
     * Set distancemaximun
     *
     * @param float $distancemaximun
     * @return Calcul
     */
    public function setDistancemaximun($distancemaximun)
    {
        $this->distancemaximun = $distancemaximun;

        return $this;
    }

    /**
     * Get distancemaximun
     *
     * @return float 
     */
    public function getDistancemaximun()
    {
        return $this->distancemaximun;
    }

    /**
     * Set distanceaxis
     *
     * @param float $distanceaxis
     * @return Calcul
     */
    public function setDistanceaxis($distanceaxis)
    {
        $this->distanceaxis = $distanceaxis;

        return $this;
    }

    /**
     * Get distanceaxis
     *
     * @return float 
     */
    public function getDistanceaxis()
    {
        return $this->distanceaxis;
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

    /**
     * Set supportSupport
     *
     * @param \Pendulage\Bundle\AccueilBundle\Entity\Support $supportSupport
     * @return Calcul
     */
    public function setSupportSupport(\Pendulage\Bundle\AccueilBundle\Entity\Support $supportSupport = null)
    {
        $this->supportSupport = $supportSupport;

        return $this;
    }

    /**
     * Get supportSupport
     *
     * @return \Pendulage\Bundle\AccueilBundle\Entity\Support 
     */
    public function getSupportSupport()
    {
        return $this->supportSupport;
    }
}
