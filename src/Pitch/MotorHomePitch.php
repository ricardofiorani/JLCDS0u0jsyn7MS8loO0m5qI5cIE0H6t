<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 14:00
 */

namespace Campsy\DeveloperTest\Pitch;


class MotorHomePitch implements PitchInterface
{
    /*
     * @var float
     */
    private $length;

    /*
     * @var float
     */
    private $price = 2;
    /*
     * @var int
     */
    const maxNonChargedLength = 3;

    /**
     * MotorHomePitch constructor.
     * @param float $length
     */
    public function __construct(float $length)
    {
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getLength() : float
    {
        return $this->length;
    }

    /**
     * @param float $length
     */
    public function setLength(float $length)
    {
        $this->length = $length;
    }

    /**
     * @inheritdoc
     */
    public function getPrice() : float
    {
        if ($this->getLength() <= self::maxNonChargedLength) {
            return 0;
        }

        return $this->price;
    }

}
