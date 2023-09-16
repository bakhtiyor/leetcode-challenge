<?php

namespace App\Tests;

use App\GenerateStringWithCharactersThatHaveOddCounts;
use PHPUnit\Framework\TestCase;

class GenerateStringWithCharactersThatHaveOddCountsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGenerateTheString(int $num, string $expected): void
    {
        $service = new GenerateStringWithCharactersThatHaveOddCounts();
        $this->assertEquals($expected, $service->generateTheString($num));
    }

    public function dataProvider(): array
    {
        return [
            [4, 'xxxy'],
            [2, 'xy'],
            [7, 'xxxxxyz'],
        ];
    }
}
