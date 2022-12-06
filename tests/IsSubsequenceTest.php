<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class IsSubsequenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsSubsequence(): void
    {
        
    }

    public function dataProvider(): array
    {
        return [
            ['abc', 'ahbgdc', true],
            ['axc', 'ahbgdc', false]
        ];
    }
}
