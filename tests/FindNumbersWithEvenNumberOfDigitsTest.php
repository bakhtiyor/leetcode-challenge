<?php

namespace App\Tests;

use App\FindNumbersWithEvenNumberOfDigits;
use PHPUnit\Framework\TestCase;

class FindNumbersWithEvenNumberOfDigitsTest extends TestCase
{
    /** @dataProvider findNumbersDataProvider */
    public function testFindNumbers(array $nums, int $expected): void
    {
        $findNumbersWithEvenNumberOfDigits = new FindNumbersWithEvenNumberOfDigits();
        $result = $findNumbersWithEvenNumberOfDigits->findNumbers($nums);

        $this->assertEquals($expected, $result);
    }

    public function findNumbersDataProvider(): array
    {
        return [
            [[12,345,2,6,7896], 2],
            [[555,901,482,1771], 1],
            [[1,22,3333,4,23232322], 3]
        ];
    }
}
