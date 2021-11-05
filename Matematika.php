<?php
class Matematika
{
    /**
     * @param integer $bilanganBasic
     * @param integer $bilanganExponen
     * 
     * @return integer
     */

    public static function plus($a, $b)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $a + $b;
        } else {
            return "Error";
        }
    }

    public static function min($a, $b)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $a - $b;
        } else {
            return "Error";
        }
    }

    public static function mul($a, $b)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $a * $b;
        } else {
            return "Error";
        }
    }

    public static function div($a, $b)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $a / $b;
        } else {
            return "Error";
        }
    }

    public static function quad($a)
    {
        if (is_numeric($a)) {
            return $a * $a;
        } else {
            return "Error";
        }
    }
}
