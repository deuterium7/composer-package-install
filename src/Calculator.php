<?php

class Calculator
{
    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function deflation($a, $b)
    {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function multiplication($a, $b)
    {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function separation($a, $b)
    {
        return $a / $b;
    }
}