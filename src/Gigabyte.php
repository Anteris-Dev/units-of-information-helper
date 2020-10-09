<?php

namespace Anteris\Helper\UnitsOfInformation;

class Gigabyte
{
    const GIGABYTES_HAS_BYTES      = 1073741824;
    const GIGABYTES_HAS_KILOBYTES  = 1048576;
    const GIGABYTES_HAS_MEGABYTES  = 1024;
    const GIGABYTES_IN_TERABYTES   = 1024;

    /**
     * Converts Bytes to Gigabytes
     */
    public static function fromByte(float $byte): float
    {
        return ($byte / static::GIGABYTES_HAS_BYTES);
    }

    /**
     * Converts Kilobytes to Gigabytes
     */
    public static function fromKilobyte(float $kilobyte): float
    {
        return ($kilobyte / static::GIGABYTES_HAS_KILOBYTES);
    }

    /**
     * Converts Megabytes to Gigabytes
     */
    public static function fromMegabyte(float $megabyte): float
    {
        return ($megabyte / static::GIGABYTES_HAS_MEGABYTES);
    }

    /**
     * Converts Terabytes to Gigabytes
     */
    public static function fromTerabyte(float $terabyte): float
    {
        return ($terabyte * static::GIGABYTES_IN_TERABYTES);
    }

    /**
     * Converts Gigabytes to Bytes
     */
    public static function toByte(float $gigabyte): float
    {
        return ($gigabyte * static::GIGABYTES_HAS_BYTES);
    }

    /**
     * Converts Gigabytes to Kilobytes
     */
    public static function toKilobyte(float $gigabyte): float
    {
        return ($gigabyte * static::GIGABYTES_HAS_KILOBYTES);
    }

    /**
     * Converts Gigabytes to Megabytes
     */
    public static function toMegabyte(float $gigabyte): float
    {
        return ($gigabyte * static::GIGABYTES_HAS_MEGABYTES);
    }

    /**
     * Converts Gigabytes to Terabytes
     */
    public static function toTerabyte(float $gigabyte): float
    {
        return ($gigabyte / static::GIGABYTES_IN_TERABYTES);
    }
}
