<?php

class Speedometer
{   
    public const KM_CONVERSION = 0.621;

    public static function convertKmToMiles(float $km)
    {
        return $km * self::KM_CONVERSION;
    }

    public static function convertMilesToKm(float $miles)
    {
        return $miles / self::KM_CONVERSION;
    }
}
