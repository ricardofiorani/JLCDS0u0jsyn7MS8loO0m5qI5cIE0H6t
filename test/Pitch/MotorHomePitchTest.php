<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 14:42
 */

namespace Campsy\DeveloperTest\Test\Pitch;


use Campsy\DeveloperTest\Pitch\MotorHomePitch;

class MotorHomePitchTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests the price when length bigger than 3
     */
    public function testPitchPriceWithLargeLength()
    {
        $object = $this->getObject(10);
        $this->assertEquals(2, $object->getPrice());
    }

    /**
     * Tests the price when length smaller than 3
     */
    public function testPitchPriceWithSmallLength()
    {
        $object = $this->getObject(2);
        $this->assertEquals(0, $object->getPrice());
    }

    /**
     * @param $length
     * @return MotorHomePitch
     */
    public function getObject($length)
    {
        return new MotorHomePitch($length);
    }
}
