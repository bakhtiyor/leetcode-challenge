<?php

namespace App\library;

use Exception;

class NumberGenerator
{
    private int $number = 0;

    public function generateNumber(int $number): void
    {
        $this->number = random_int(1, $number);
    }

    public function setNumber(int $num): void
    {
        $this->number = $num;
    }

    public function guess(int $number): int
    {
        if ($number > $this->number) {
            return -1;
        }

        if ($number < $this->number) {
            return 1;
        }
        return 0;
    }
}
