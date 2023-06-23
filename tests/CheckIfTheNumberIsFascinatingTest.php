<?php

namespace App\Tests;

use App\CheckIfTheNumberIsFascinating;
use PHPUnit\Framework\TestCase;

class CheckIfTheNumberIsFascinatingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsFascinating(int $number, bool $expected): void
    {
        $checkIfTheNumberIsFascinating = new CheckIfTheNumberIsFascinating();
        $this->assertEquals($expected, $checkIfTheNumberIsFascinating->isFascinating($number));
    }

    public function dataProvider(): array
    {
        return [
            [192, true],
            [100, false]
        ];
    }
}
