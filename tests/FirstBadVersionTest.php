<?php

namespace App\Tests;

use App\FirstBadVersion;
use PHPUnit\Framework\TestCase;

class FirstBadVersionTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFirstBadVersion(int $n, int $badVersion, int $expected): void
    {
        $firstBadVersion = new FirstBadVersion();
        $firstBadVersion->setBadVersion($badVersion);
        $result = $firstBadVersion->firstBadVersion($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [10, 5, 5],
            [5, 4, 4],
            [1, 1, 1]
        ];
    }
}
