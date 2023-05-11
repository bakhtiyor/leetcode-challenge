<?php

namespace App\Tests;

use App\DestinationCity;
use PHPUnit\Framework\TestCase;

class DestinationCityTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDestCity(array $paths, string $expected): void
    {
        $this->assertEquals($expected, (new DestinationCity())->destCity($paths));
    }

    public function dataProvider(): array
    {
        return [
            [
                [
                    ["London","New York"],
                    ["New York","Lima"],
                    ["Lima","Sao Paulo"]
                ],
                "Sao Paulo"
            ],
            [
                [
                    ["B","C"],
                    ["D","B"],
                    ["C","A"]
                ],
                "A"
            ],
            [
                [
                    ["A","Z"]
                ],
                "Z"
            ]
        ];
    }
}
