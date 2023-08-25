<?php

namespace App\Tests;

use App\DeleteOperationForTwoStrings;
use PHPUnit\Framework\TestCase;

class DeleteOperationForTwoStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinDistance(string $word1, string $word2, int $expected): void
    {
        $obj = new DeleteOperationForTwoStrings();
        $result = $obj->minDistance($word1, $word2);
        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['sea', 'eat', 2],
            ['leetcode', 'etco', 4]
        ];
    }
}
