<?php

namespace App\Tests;

use App\FindTheTownJudge;
use PHPUnit\Framework\TestCase;

class FindTheTownJudgeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindJudge(array $trust, int $n, int $expected): void
    {
        $findTheTownJudge = new FindTheTownJudge();
        $result = $findTheTownJudge->findJudge($n, $trust);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[1,2],[2,1]], 2, -1],
            [[], 1, 1],
            [[[1,3],[1,4],[2,3],[2,4],[4,3]], 4, 3],
            [[[1,2],[2,3]], 3, -1],
            [[[1,3],[2,3],[3,1]], 3, -1],
            [[[1,2]], 2, 2],
            [[[1,3],[2,3]], 3, 3],
        ];
    }
}
