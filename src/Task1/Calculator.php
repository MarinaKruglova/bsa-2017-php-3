<?php declare(strict_types = 1);

namespace BinaryStudioAcademy\Task1;


class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }
    public function divide(int $a, int $b): int
    {
        return intdiv($a, $b);
    }
    public function pow2(int $a): int
    {
        return pow(2, $a);
    }
}
