<?php

namespace App\Tests;

use App\SetMismatch;
use PHPUnit\Framework\TestCase;

class SetMismatchTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindErrorNums(array $expected, array $nums): void
    {
        $setMismatch = new SetMismatch();
        $result = $setMismatch->findErrorNums($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,1], [3,2,3,4,6,5]],
            [[2,1], [3,2,2]],
            [[2,3], [1,2,2,4]],
            [[1,2], [1,1]],
        ];
    }
}
