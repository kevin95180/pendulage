<?php

namespace Pendulage\Bundle\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ohle
 *
 * @ORM\Table(name="ohle")
 * @ORM\Entity
 */
class Ohle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ohle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOhle;

    /**
     * @var float
     *
     * @ORM\Column(name="MessengerWireWeight", type="float", precision=10, scale=0, nullable=false)
     */
    private $messengerwireweight;

    /**
     * @var float
     *
     * @ORM\Column(name="MessengerWireTension", type="float", precision=10, scale=0, nullable=false)
     */
    private $messengerwiretension;

    /**
     * @var float
     *
     * @ORM\Column(name="ContactWireWeight", type="float", precision=10, scale=0, nullable=false)
     */
    private $contactwireweight;

    /**
     * @var float
     *
     * @ORM\Column(name="ContactWireTension", type="float", precision=10, scale=0, nullable=false)
     */
    private $contactwiretension;

    /**
     * @var float
     *
     * @ORM\Column(name="WeightOfDropper", type="float", precision=10, scale=0, nullable=false)
     */
    private $weightofdropper;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeOfOhle", type="string", length=45, nullable=false)
     */
    private $typeofohle;



    /**
     * Get idOhle
     *
     * @return integer 
     */
    public function getIdOhle()
    {
        return $this->idOhle;
    }

    /**
     * Set messengerwireweight
     *
     * @param float $messengerwireweight
     * @return Ohle
     */
    public function setMessengerwireweight($messengerwireweight)
    {
        $this->messengerwireweight = $messengerwireweight;

        return $this;
    }

    /**
     * Get messengerwireweight
     *
     * @return float 
     */
    public function getMessengerwireweight()
    {
        return $this->messengerwireweight;
    }

    /**
     * Set messengerwiretension
     *
     * @param float $messengerwiretension
     * @return Ohle
     */
    public function setMessengerwiretension($messengerwiretension)
    {
        $this->messengerwiretension = $messengerwiretension;

        return $this;
    }

    /**
     * Get messengerwiretension
     *
     * @return float 
     */
    public function getMessengerwiretension()
    {
        return $this->messengerwiretension;
    }

    /**
     * Set contactwireweight
     *
     * @param float $contactwireweight
     * @return Ohle
     */
    public function setContactwireweight($contactwireweight)
    {
        $this->contactwireweight = $contactwireweight;

        return $this;
    }

    /**
     * Get contactwireweight
     *
     * @return float 
     */
    public function getContactwireweight()
    {
        return $this->contactwireweight;
    }

    /**
     * Set contactwiretension
     *
     * @param float $contactwiretension
     * @return Ohle
     */
    public function setContactwiretension($contactwiretension)
    {
        $this->contactwiretension = $contactwiretension;

        return $this;
    }

    /**
     * Get contactwiretension
     *
     * @return float 
     */
    public function getContactwiretension()
    {
        return $this->contactwiretension;
    }

    /**
     * Set weightofdropper
     *
     * @param float $weightofdropper
     * @return Ohle
     */
    public function setWeightofdropper($weightofdropper)
    {
        $this->weightofdropper = $weightofdropper;

        return $this;
    }

    /**
     * Get weightofdropper
     *
     * @return float 
     */
    public function getWeightofdropper()
    {
        return $this->weightofdropper;
    }

    /**
     * Set typeofohle
     *
     * @param string $typeofohle
     * @return Ohle
     */
    public function setTypeofohle($typeofohle)
    {
        $this->typeofohle = $typeofohle;

        return $this;
    }

    /**
     * Get typeofohle
     *
     * @return string 
     */
    public function getTypeofohle()
    {
        return $this->typeofohle;
    }
    
    public function __toString() {
        return $this->typeofohle
                ." | ".$this->messengerwireweight
                ." kg/m | ".$this->messengerwiretension
                ." N | ".$this->contactwireweight
                ." kg/m | ".$this->contactwiretension
                ." N | ".$this->weightofdropper
                ." kg"
                ;
    }
    
}