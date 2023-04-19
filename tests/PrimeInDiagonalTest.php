<?php

namespace App\Tests;

use App\PrimeInDiagonal;
use PHPUnit\Framework\TestCase;

class PrimeInDiagonalTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDiagonalPrime(array $nums, int $expected): void
    {
        $primeInDiagonal = new PrimeInDiagonal();
        $this->assertEquals($expected, $primeInDiagonal->diagonalPrime($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[[1,2,3],[5,6,7],[9,10,11]], 11],
            [[[1,2,3],[5,17,7],[9,11,10]], 17]
        ];
    }
}
