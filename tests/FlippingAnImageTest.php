<?php

namespace App\Tests;

use App\FlippingAnImage;
use PHPUnit\Framework\TestCase;

class FlippingAnImageTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFlipAndInvertImage(array $image, array $expected): void
    {
        $flippingAnImage = new FlippingAnImage();
        $result = $flippingAnImage->flipAndInvertImage($image);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[1,1,0],[1,0,1],[0,0,0]], [[1,0,0],[0,1,0],[1,1,1]]],
            [[[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]], [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]]]
        ];
    }
}
