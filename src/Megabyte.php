<?php

namespace Anteris\Helper\UnitsOfInformation;

class Megabyte
{
    const MEGABYTES_HAS_BYTES       = 1048576;
    const MEGABYTES_HAS_KILOBYTES   = 1024;
    const MEGABYTES_IN_GIGABYTES    = 1024;
    const MEGABYTES_IN_TERABYTES    = 1048576;

    /**
     * Converts Bytes to Megabytes
     */
    public static function fromByte(float $byte): float
    {
        return ($byte / static::MEGABYTES_HAS_BYTES);
    }

    /**
     * Converts Kilobytes to Megabytes
     */
    public static function fromKilobyte(float $kilobyte): float
    {
        return ($kilobyte / static::MEGABYTES_HAS_KILOBYTES);
    }

    /**
     * Converts Gigabytes to Megabytes
     */
    public static function fromGigabyte(float $gigabyte): float
    {
        return ($gigabyte * static::MEGABYTES_IN_GIGABYTES);
    }

    /**
     * Converts Terabytes to Megabytes
     */
    public static function fromTerabyte(float $terabyte): float
    {
        return ($terabyte * static::MEGABYTES_IN_TERABYTES);
    }

    /**
     * Converts Megabytes to Bytes
     */
    public static function toByte(float $megabyte): float
    {
        return ($megabyte * static::MEGABYTES_HAS_BYTES);
    }

    /**
     * Converts Megabytes to Kilobytes
     */
    public static function toKilobyte(float $megabyte): float
    {
        return ($megabyte * static::MEGABYTES_HAS_KILOBYTES);
    }

    /**
     * Converts Megabytes to Gigabytes
     */
    public static function toGigabyte(float $megabyte): float
    {
        return ($megabyte / static::MEGABYTES_IN_GIGABYTES);
    }

    /**
     * Converts Megabytes to Terabytes
     */
    public static function toTerabyte(float $megabyte): float
    {
        return ($megabyte / static::MEGABYTES_IN_TERABYTES);
    }
}
