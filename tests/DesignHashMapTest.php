<?php

namespace App\Tests;

use App\DesignHashMap;
use PHPUnit\Framework\TestCase;

class DesignHashMapTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testHashMap(array $items, array $expected): void
    {
        $designHashMap = new DesignHashMap();
        /** @var int $item */
        foreach ($items as $item) {
            $designHashMap->put($item, $item);
        }
        /** @var int $item */
        foreach ($expected as $item) {
            $this->assertEquals($item, $designHashMap->get($item));
        }

        $designHashMap->remove(2);
        $this->assertEquals(-1, $designHashMap->get(2));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3], [1, 2, 3]],
            [[2, 3], [2, 3]]
        ];
    }
}
