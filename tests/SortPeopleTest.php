<?php

namespace App\Tests;

use App\SortPeople;
use PHPUnit\Framework\TestCase;

class SortPeopleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSortPeople(array $names, array $heights, array $expected): void
    {
        $sortPeople = new SortPeople();
        $result = $sortPeople->sortPeople($names, $heights);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [['Mary','John','Emma'], [180,165,170], ['Mary','Emma','John']],
            [['Alice','Bob','Bob'], [155,185,150], ['Bob','Alice','Bob']]
        ];
    }
}
