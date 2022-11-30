<?php

namespace App\Tests;

use App\UniqueNumberOfOccurrence;
use PHPUnit\Framework\TestCase;

class UniqueNumberOfOccurrenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testUniqueOccurrences(array $nums, bool $expected): void
    {
        $uniqueNumberOfOccurrence = new UniqueNumberOfOccurrence();
        $result = $uniqueNumberOfOccurrence->uniqueOccurrences($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,2,1,1,3], true],
            [[1,2], false]
        ];
    }
}
