<?php

namespace App\Tests;

use App\OddStringDifference;
use PHPUnit\Framework\TestCase;

class OddStringDifferenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testOddString(array $words, string $expected): void
    {
        $obj = new OddStringDifference();
        $result = $obj->oddString($words);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [["adc","wzy","abc"], "abc"],
            [["aaa","bob","ccc","ddd"], "bob"]
        ];
    }
}
