<?php

namespace Anteris\Helper\UnitsOfInformation;

class Kilobyte
{
    const KILOBYTES_HAS_BYTES       = 1024;
    const KILOBYTES_IN_MEGABYTES    = 1024;
    const KILOBYTES_IN_GIGABYTES    = 1048576;
    const KILOBYTES_IN_TERABYTES    = 1073741824;

    /**
     * Converts Bytes to Kilobytes
     */
    public static function fromByte(float $byte): float
    {
        return ($byte / static::KILOBYTES_HAS_BYTES);
    }

    /**
     * Converts Megabytes to Kilobytes
     */
    public static function fromMegabyte(float $megabyte): float
    {
        return ($megabyte * static::KILOBYTES_IN_MEGABYTES);
    }

    /**
     * Converts Gigabytes to Megabytes
     */
    public static function fromGigabyte(float $gigabyte): float
    {
        return ($gigabyte * static::KILOBYTES_IN_GIGABYTES);
    }

    /**
     * Converts Terabytes to Megabytes
     */
    public static function fromTerabyte(float $terabyte): float
    {
        return ($terabyte * static::KILOBYTES_IN_TERABYTES);
    }

    /**
     * Converts Kilobytes to Bytes
     */
    public static function toByte(float $kilobyte): float
    {
        return ($kilobyte * static::KILOBYTES_HAS_BYTES);
    }

    /**
     * Converts Kilobytes to Megabytes
     */
    public static function toMegabyte(float $kilobyte): float
    {
        return ($kilobyte / static::KILOBYTES_IN_MEGABYTES);
    }

    /**
     * Converts Kilobytes to Gigabytes
     */
    public static function toGigabyte(float $kilobyte): float
    {
        return ($kilobyte / static::KILOBYTES_IN_GIGABYTES);
    }

    /**
     * Converts Kilobytes to Terabytes
     */
    public static function toTerabyte(float $kilobyte): float
    {
        return ($kilobyte / static::KILOBYTES_IN_TERABYTES);
    }
}
