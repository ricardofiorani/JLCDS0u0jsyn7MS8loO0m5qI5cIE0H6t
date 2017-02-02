<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 14:14
 */

namespace Campsy\DeveloperTest\Pitch;


class TentPitch implements PitchInterface
{
    /**
     * @var int
     */
    private $numberOfTents;

    /*
     * @var float
     */
    private $pricePerTent = 1.00;

    /**
     * TentPitch constructor.
     * @param int $numberOfTents
     */
    public function __construct(int $numberOfTents)
    {
        $this->numberOfTents = $numberOfTents;
    }

    /**
     * Gets the price for the pitch
     * @return float
     */
    public function getPrice() : float
    {
        if ($this->getNumberOfTents() <= 1) {
            return 0;
        }

        return ($this->getNumberOfTents() - 1) * $this->pricePerTent;
    }

    /**
     * @return int
     */
    public function getNumberOfTents() : int
    {
        return $this->numberOfTents;
    }

    /**
     * @param float $numberOfTents
     */
    public function setNumberOfTents(int $numberOfTents)
    {
        $this->numberOfTents = $numberOfTents;
    }
}
