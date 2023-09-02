<?php

namespace App\Tests;

use App\GroupAnagrams;
use PHPUnit\Framework\TestCase;

class GroupAnagramsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGroupAnagrams(array $strs, array $expected): void
    {
        $groupAnagrams = new GroupAnagrams();
        $this->assertEquals($expected, $groupAnagrams->groupAnagrams($strs));
    }

    public function dataProvider(): array
    {
        return [
            [
                'strs' => [""],
                'expected' => [[""]]
            ],
            [
                'strs' => ["a"],
                'expected' => [["a"]]
            ]
        ];
    }
}
