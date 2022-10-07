<?php

namespace App\Tests;

use App\LongestCommonPrefix;
use PHPUnit\Framework\TestCase;

class LongestCommonPrefixTest extends TestCase
{
    /** @dataProvider longestCommonPrefixDataProvider */
    public function testLongestCommonPrefix(array $strs, string $expected): void
    {
        $longestCommonPrefix = new LongestCommonPrefix();
        $result = $longestCommonPrefix->longestCommonPrefix($strs);
        $this->assertEquals($expected, $result);
    }

    public function longestCommonPrefixDataProvider(): array
    {
        return [
            [['dog','racecar','car'], ''],
            [['ab', 'a'], 'a'],
            [['flower','flower','flower','flower'], 'flower'],
            [['flower','flow','flowerc'], 'flow'],
            [['', ''], ''],
            [['a'], 'a']
        ];
    }
}
