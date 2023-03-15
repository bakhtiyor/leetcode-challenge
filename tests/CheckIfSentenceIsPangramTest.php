<?php

namespace App\Tests;

use App\CheckIfSentenceIsPangram;
use PHPUnit\Framework\TestCase;

class CheckIfSentenceIsPangramTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckIfPangram(string $sentence, bool $expected): void
    {
        $checkIfSentenceIsPangram = new CheckIfSentenceIsPangram();
        $this->assertEquals($expected, $checkIfSentenceIsPangram->checkIfPangram($sentence));
    }

    public function dataProvider(): array
    {
        return [
            ['thequickbrownfoxjumpsoverthelazydog', true],
            ['leetcode', false],
        ];
    }
}
