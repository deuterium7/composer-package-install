<?php

namespace AlexanderZabornyi\PackageTest;

class Calculator
{
    /**
     * Сложение двух чисел
     *
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Вычитание двух чисел
     *
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Умножение двух чисел
     *
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Деление двух чисел
     *
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }
}