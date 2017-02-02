<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 13:58
 */

namespace Campsy\DeveloperTest\Pitch;


interface PitchInterface
{
    /**
     * Gets the price for the pitch
     * @return float
     */
    public function getPrice() : float;

}
