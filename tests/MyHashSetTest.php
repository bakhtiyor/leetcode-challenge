<?php

namespace App\Tests;

use App\MyHashSet;
use PHPUnit\Framework\TestCase;

class MyHashSetTest extends TestCase
{
    /** @dataProvider dataProviderForContains */
    public function testContains(array $items, int $key, bool $expected): void
    {
        $myHashSet = new MyHashSet();
        /** @var int $item */
        foreach ($items as $item) {
            $myHashSet->add($item);
        }
        $result = $myHashSet->contains($key);
        $this->assertEquals($expected, $result);
    }

    public function dataProviderForContains(): array
    {
        return [
            [[1, 2], 1, true],
            [[1, 2], 3, false],
            [[1, 2], 2, true]
        ];
    }

    /** @dataProvider dataProviderForAdd */
    public function testAdd(array $items, array $expected): void
    {
        $myHashSet = new MyHashSet();
        /** @var int $item */
        foreach ($items as $item) {
            $myHashSet->add($item);
        }
        /** @var int $item */
        foreach ($items as $item) {
            $this->assertTrue($myHashSet->contains($item));
        }
    }

    public function dataProviderForAdd(): array
    {
        return [
            [[2], [2]],
            [[1, 2], [1, 2]],
            [[1, 3], [1, 3]]
        ];
    }

    /** @dataProvider dataProviderForRemove */
    public function testRemove(array $items, int $key, array $expected): void
    {
        $myHashSet = new MyHashSet();
        /** @var int $item */
        foreach ($items as $item) {
            $myHashSet->add($item);
        }
        $myHashSet->remove($key);
        /** @var int $item */
        foreach ($expected as $item) {
            $this->assertTrue($myHashSet->contains($item));
        }
    }

    public function dataProviderForRemove(): array
    {
        return [
            [[1, 2, 3], 2, [1, 3]],
            [[11, 22], 22, [11]]
        ];
    }

}
