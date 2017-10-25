<?php

namespace AlexanderZabornyi\PackageTest;

class Calculator
{
    /**
     * Сложение двух чисел
     *
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    public function add(float $a, float $b)
    {
        return $a + $b;
    }

    /**
     * Вычитание двух чисел
     *
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    public function subtract(float $a, float $b)
    {
        return $a - $b;
    }

    /**
     * Умножение двух чисел
     *
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    public function multiply(float $a, float $b)
    {
        return $a * $b;
    }

    /**
     * Деление двух чисел
     *
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    public function divide(float $a, float $b)
    {
        return $a / $b;
    }
}