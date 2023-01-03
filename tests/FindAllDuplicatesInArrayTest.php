<?php

namespace App\Tests;

use App\FindAllDuplicatesInArray;
use PHPUnit\Framework\TestCase;

class FindAllDuplicatesInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindDuplicates(array $nums, array $expected): void
    {
        $findAllDuplicatesInArray = new FindAllDuplicatesInArray();
        $result = $findAllDuplicatesInArray->findDuplicates($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[4,3,2,7,8,2,3,1], [2,3]],
            [[1,1,2], [1]],
            [[1], []]
        ];
    }
}
