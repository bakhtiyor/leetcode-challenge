<?php

namespace App\Tests;

use App\PermutationInString;
use PHPUnit\Framework\TestCase;

class PermutationInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckInclusion(string $s1, string $s2, bool $expected): void
    {
        $permutationInString = new PermutationInString();
        $result = $permutationInString->checkInclusion($s1, $s2);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abc', 'xacabucyzabx', true],
            ['ab', 'eidboaoo', false],
            ['ab', 'eidbaooo', true],
        ];
    }
}
