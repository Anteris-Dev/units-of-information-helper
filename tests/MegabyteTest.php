<?php

namespace Anteris\Helper\UnitsOfInformation\Tests;

use Anteris\Helper\UnitsOfInformation\Megabyte;
use PHPUnit\Framework\TestCase;

class MegabyteTest extends TestCase
{
    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_from_byte()
    {
        $this->assertEquals(0.00000095367432, Megabyte::fromByte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_from_kilobyte()
    {
        $this->assertEquals(0.0009765625, Megabyte::fromKilobyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_from_gigabyte()
    {
        $this->assertEquals(1024, Megabyte::fromGigabyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_from_terabyte()
    {
        $this->assertEquals(1048576, Megabyte::fromTerabyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_to_byte()
    {
        $this->assertEquals(1048576, Megabyte::toByte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_to_kilobyte()
    {
        $this->assertEquals(1024, Megabyte::toKilobyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_to_gigabyte()
    {
        $this->assertEquals(0.0009765625, Megabyte::toGigabyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Megabyte
     */
    public function test_to_terabyte()
    {
        $this->assertEquals(9.5367432e-7, Megabyte::toTerabyte(1));
    }
}
