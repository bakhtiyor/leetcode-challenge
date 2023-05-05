<?php

namespace App\Tests;

use App\CapitalizeTheTitle;
use PHPUnit\Framework\TestCase;

class CapitalizeTheTitleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCapitalizeTitle(string $title, string $expected): void
    {
        $obj = new CapitalizeTheTitle();
        $result = $obj->capitalizeTitle($title);

        $this->assertEquals($result, $expected);
    }

    public function dataProvider(): array
    {
        return [
            ['capiTalIze tHe titLe', 'Capitalize The Title'],
            ['First leTTeR of EACH Word', 'First Letter of Each Word'],
            ['i lOve leetcode', 'i Love Leetcode']
        ];
    }
}
