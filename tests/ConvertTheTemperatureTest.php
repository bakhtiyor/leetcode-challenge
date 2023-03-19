<?php

namespace App\Tests;

use App\ConvertTheTemperature;
use PHPUnit\Framework\TestCase;

class ConvertTheTemperatureTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testConvertTemperature(): void
    {
        $obj = new ConvertTheTemperature();
        $this->assertSame($obj->convertTemperature(36.50), [309.65000, 97.70000]);
        $this->assertSame($obj->convertTemperature(122.11), [395.26000, 251.79800]);
    }

    public function dataProvider(): array
    {
        return [
            [36.50, [309.65000, 97.70000]],
            [122.11, [395.26000, 251.79800]],
        ];
    }
}
