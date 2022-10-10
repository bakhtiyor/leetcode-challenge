<?php

namespace App\Tests;

use App\SearchInsertPosition;
use PHPUnit\Framework\TestCase;

class SearchInsertPositionTest extends TestCase
{
    /** @dataProvider testSearchInsertPositionDataProvider */
    public function testSearchInsert(array $nums, int $target, int $expected): void
    {
        $searchInsertPosition = new SearchInsertPosition();
        $result = $searchInsertPosition->searchInsert($nums, $target);
        $this->assertEquals($result, $expected);
    }

    public function testSearchInsertPositionDataProvider(): array
    {
        return [
            [[1,3,5,6], 5, 2],
            [[1,3,5,6], 2, 1],
            [[1,3,5,6], 7, 4]
        ];
    }
}