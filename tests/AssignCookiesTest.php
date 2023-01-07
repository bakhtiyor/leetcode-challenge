<?php

namespace App\Tests;

use App\AssignCookies;
use PHPUnit\Framework\TestCase;

class AssignCookiesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindContentChildren(array $g, array $s, int $expected): void
    {
        $assignCookies = new AssignCookies();
        $result = $assignCookies->findContentChildren($g, $s);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
          [[1,2,3], [1,1], 1],
          [[1,2], [1,2,3], 2]
        ];
    }
}
