<?php

namespace Anteris\Helper\UnitsOfInformation\Tests;

use Anteris\Helper\UnitsOfInformation\Gigabyte;
use PHPUnit\Framework\TestCase;

class GigabyteTest extends TestCase
{
    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_from_byte()
    {
        // 0.000000001
        $this->assertEquals(1e-9, Gigabyte::fromByte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_from_kilobyte()
    {
        $this->assertEquals(0.00001335144043, Gigabyte::fromKilobyte(14));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_from_megabyte()
    {
        $this->assertEquals(0.001953125, Gigabyte::fromMegabyte(2));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_from_terabyte()
    {
        $this->assertEquals(1228.8, Gigabyte::fromTerabyte(1.2));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_to_byte()
    {
        $this->assertEquals(1073741824, Gigabyte::toByte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_to_kilobyte()
    {
        $this->assertEquals(1048576, Gigabyte::toKilobyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_to_megabyte()
    {
        $this->assertEquals(1024, Gigabyte::toMegabyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Gigabyte
     */
    public function test_to_terabyte()
    {
        $this->assertEquals(0.0009765625, Gigabyte::toTerabyte(1));
    }
}
