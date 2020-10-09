<?php

namespace Anteris\Helper\UnitsOfInformation\Tests;

use Anteris\Helper\UnitsOfInformation\Kilobyte;
use PHPUnit\Framework\TestCase;

class KilobyteTest extends TestCase
{
    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_from_byte()
    {
        $this->assertEquals(0.01206640625, Kilobyte::fromByte(12.356));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_from_gigabyte()
    {
        $this->assertEquals(14680064, Kilobyte::fromGigabyte(14));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_from_megabyte()
    {
        $this->assertEquals(2621.44, Kilobyte::fromMegabyte(2.56));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_from_terabyte()
    {
        $this->assertEquals(1288490188.799999952, Kilobyte::fromTerabyte(1.2));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_to_byte()
    {
        $this->assertEquals(1024, Kilobyte::toByte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_to_gigabyte()
    {
        $this->assertEquals(0.00000095367432, Kilobyte::toGigabyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_to_megabyte()
    {
        $this->assertEquals(0.0009765625, Kilobyte::toMegabyte(1));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Kilobyte
     */
    public function test_to_terabyte()
    {
        $this->assertEquals(0.000000000931323, Kilobyte::toTerabyte(1));
    }
}
