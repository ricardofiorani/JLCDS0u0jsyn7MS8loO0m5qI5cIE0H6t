<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 14:12
 */

namespace Campsy\DeveloperTest\Pitch;


class CaravanPitch implements PitchInterface
{
    /*
     * @var float
     */
    private $price = 5;

    /**
     * @inheritdoc
     */
    public function getPrice() : float
    {
        return $this->price;
    }
}
