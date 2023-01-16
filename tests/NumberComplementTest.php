<?php

namespace App\Tests;

use App\NumberComplement;
use PHPUnit\Framework\TestCase;

class NumberComplementTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindComplement(int $num, int $expected): void
    {
        $numberComplement = new NumberComplement();
        $result = $numberComplement->findComplement($num);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [5, 2],
            [1, 0]
        ];
    }
}
