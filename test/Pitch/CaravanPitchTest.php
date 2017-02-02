<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 02/02/2017
 * Time: 14:32
 */

namespace Campsy\DeveloperTest\Test\Pitch;


use Campsy\DeveloperTest\Pitch\CaravanPitch;

class CaravanPitchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the price
     */
    public function testPitchPrice()
    {
        $object = $this->getObject();
        $this->assertEquals(5, $object->getPrice());
    }

    /**
     * @return CaravanPitch
     */
    public function getObject()
    {
        return new CaravanPitch();
    }
}
