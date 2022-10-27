<?php

namespace App\Tests;

use App\FindAllNumbersDisappearedInArray;
use PHPUnit\Framework\TestCase;

class FindAllNumbersDisappearedInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindDisappearedNumbers(array $nums, array $expected): void
    {
        $findAllNumbersDisappearedInArray = new FindAllNumbersDisappearedInArray();
        $result = $findAllNumbersDisappearedInArray->findDisappearedNumbers($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[4,3,2,7,8,2,3,1], [5,6]],
            [[1,1], [2]]
        ];
    }
}
