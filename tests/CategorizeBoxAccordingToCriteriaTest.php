<?php

namespace App\Tests;

use App\CategorizeBoxAccordingToCriteria;
use PHPUnit\Framework\TestCase;

class CategorizeBoxAccordingToCriteriaTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCategorizeBox(int $length, int $width, int $height, int $mass, string $expected): void
    {
        $categorizeBoxAccordingToCriteria = new CategorizeBoxAccordingToCriteria();
        $this->assertSame($expected, $categorizeBoxAccordingToCriteria->categorizeBox($length, $width, $height, $mass));
    }

    public function dataProvider(): array
    {
        return [
            [100, 35, 700, 300, 'Heavy'],
            [200, 50, 800, 50, 'Neither']
        ];
    }
}
