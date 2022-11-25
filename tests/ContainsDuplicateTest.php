<?php

namespace App\Tests;

use App\ContainsDuplicate;
use PHPUnit\Framework\TestCase;

class ContainsDuplicateTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testContainsDuplicate(array $nums, bool $expected): void
    {
        $containsDuplicate = new ContainsDuplicate();
        $result = $containsDuplicate->containsDuplicate($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,1], true],
            [[1,2,3,4], false],
            [[1,1,1,3,3,4,3,2,4,2], true]
        ];
    }
}
