<?php

namespace App\Tests;

use App\RansomNote;
use PHPUnit\Framework\TestCase;

class RansomNoteTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanConstruct(string $ransomNote, string $magazine, bool $expected): void
    {
        $ransomNoteObj = new RansomNote();
        $result = $ransomNoteObj->canConstruct($ransomNote, $magazine);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['bg', 'efjbdfbdgfjhhaiigfhbaejahgfbbgbjagbddfgdiaigdadhcfcj', true],
            ['aa', 'aab', true],
            ['a', 'b', false],
            ['aa', 'ab', false],
        ];
    }
}
