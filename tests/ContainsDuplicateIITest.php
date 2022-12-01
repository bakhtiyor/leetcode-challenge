<?php

namespace App\Tests;

use App\ContainsDuplicateII;
use PHPUnit\Framework\TestCase;

class ContainsDuplicateIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testContainsNearbyDuplicate(array $nums, int $k, bool $expected): void
    {
        $containsDuplicateII = new ContainsDuplicateII();
        $result = $containsDuplicateII->containsNearbyDuplicate($nums, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,1], 3, true],
            [[1,0,1,1], 1, true],
            [[1,2,3,1,2,3], 2, false]
        ];
    }
}
