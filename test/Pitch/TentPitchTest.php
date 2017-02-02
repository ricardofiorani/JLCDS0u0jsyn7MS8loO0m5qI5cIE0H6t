<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 14:49
 */

namespace Campsy\DeveloperTest\Test\Pitch;


use Campsy\DeveloperTest\Pitch\TentPitch;

class TentPitchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the price
     */
    public function testPitchPriceForOneTent()
    {
        $object = $this->getObject(1);
        $this->assertEquals(0, $object->getPrice());
    }

    /**
     * Tests the price
     */
    public function testPitchPriceForMoreThanOne()
    {
        $object = $this->getObject(2);
        $this->assertEquals(1, $object->getPrice());
    }

    /**
     * @param $numberOfTents
     * @return TentPitch
     */
    public function getObject($numberOfTents)
    {
        return new TentPitch($numberOfTents);
    }
}
