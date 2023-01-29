<?php

namespace App\Tests;

use App\CheapestFlightsWithinKStops;
use PHPUnit\Framework\TestCase;

class CheapestFlightsWithinKStopsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindCheapestPrice(int $n, array $flights, int $src, int $dst, int $k, int $expected): void
    {
        $cheapestFlightsWithinKStops = new CheapestFlightsWithinKStops();
        $result = $cheapestFlightsWithinKStops->findCheapestPrice($n, $flights, $src, $dst, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, [[0,1,100],[1,2,100],[2,0,100],[1,3,600],[2,3,200]], 0, 3, 1, 700],
            [3, [[0,1,100],[1,2,100],[0,2,500]], 0, 2, 1, 200]
        ];
    }
}
