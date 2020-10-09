<?php

namespace Anteris\Helper\UnitsOfInformation;

class Human
{
    /**
     * Formats the Bytes into a Human-readable format.
     */
    public static function byte(float $bytes): string
    {
        return sprintf('%s B', number_format($bytes, 2));
    }

    /**
     * Formats the Gigabytes into a Human-readable format.
     */
    public static function gigabyte(float $gigabyte): string
    {
        return sprintf('%s GB', number_format($gigabyte, 2));
    }

    /**
     * Formats the Kilobytes into a Human-readable format.
     */
    public static function kilobyte(float $kilobyte): string
    {
        return sprintf('%s KB', number_format($kilobyte, 2));
    }

    /**
     * Formats the Megabytes into a Human-readable format.
     */
    public static function megabyte(float $megabyte): string
    {
        return sprintf('%s MB', number_format($megabyte, 2));
    }

    /**
     * Formats the Terabytes into a Human-readable format.
     */
    public static function terabyte(float $terabyte): string
    {
        return sprintf('%s TB', number_format($terabyte, 2));
    }
}
