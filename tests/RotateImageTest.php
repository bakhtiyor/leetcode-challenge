<?php

namespace App\Tests;

use App\RotateImage;
use PHPUnit\Framework\TestCase;

class RotateImageTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRotate(array &$matrix, array $expected): void
    {
        $rotateImage = new RotateImage();
        $rotateImage->rotate($matrix);
        $this->assertEquals($matrix, $expected);
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1,2,3],[4,5,6],[7,8,9]],
                [[7,4,1],[8,5,2],[9,6,3]]
            ],
            [
                [[5,1,9,11],[2,4,8,10],[13,3,6,7],[15,14,12,16]],
                [[15,13,2,5],[14,3,4,1],[12,6,8,9],[16,7,10,11]]
            ]
        ];
    }
}
