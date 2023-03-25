<?php

namespace App\Tests;

use App\DeleteGreatestValueInEachRow;
use PHPUnit\Framework\TestCase;

class DeleteGreatestValueInEachRowTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDeleteGreatestValue(array $grid, int $expected): void
    {
        $deleteGreatestValueInEachRow = new DeleteGreatestValueInEachRow();
        $this->assertEquals($expected, $deleteGreatestValueInEachRow->deleteGreatestValue($grid));
    }

    public function dataProvider(): array
    {
        return [
            [[[58,42,8,75,28],[35,21,13,21,72]], 216],
            [[[1,2,4],[3,3,1]], 8],
            [[[10]], 10],
        ];
    }
}
