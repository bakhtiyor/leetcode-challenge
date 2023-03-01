<?php

namespace App\Tests;

use App\SortArray;
use PHPUnit\Framework\TestCase;

class SortArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSortArray(array $expected, array $numbers): void
    {
        $sortArray = new SortArray();
        $result = $sortArray->sortArray($numbers);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,5], [5,2,3,1]],
            [[0,0,1,1,2,5], [5,1,1,2,0,0]],
        ];
    }
}
