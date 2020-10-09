<?php

namespace Anteris\Helper\UnitsOfInformation\Tests;

use Anteris\Helper\UnitsOfInformation\Human;
use PHPUnit\Framework\TestCase;

class HumanTest extends TestCase
{
    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Human
     */
    public function test_byte()
    {
        $this->assertEquals('1,024.00 B', Human::byte(1024));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Human
     */
    public function test_gigabyte()
    {
        $this->assertEquals('1,024.00 GB', Human::gigabyte(1024));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Human
     */
    public function test_kilobyte()
    {
        $this->assertEquals('1,024.00 KB', Human::kilobyte(1024));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Human
     */
    public function test_megabyte()
    {
        $this->assertEquals('1,024.00 MB', Human::megabyte(1024));
    }

    /**
     * @covers \Anteris\Helper\UnitsOfInformation\Human
     */
    public function test_terabyte()
    {
        $this->assertEquals('1,024.00 TB', Human::terabyte(1024));
    }
}
