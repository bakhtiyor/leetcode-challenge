<?php

namespace App\Tests;

use App\FindDifference;
use PHPUnit\Framework\TestCase;

class FindDifferenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindTheDifference(string $s, string $t, string $expected): void
    {
        $findDifference = new FindDifference();
        $result = $findDifference->findTheDifference($s, $t);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abcd', 'abcde', 'e'],
            ['', 'y', 'y']
        ];
    }
}
