<?php

namespace App\Tests;

use App\TruncateSentence;
use PHPUnit\Framework\TestCase;

class TruncateSentenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTruncateSentence(string $str, int $len, string $expected): void
    {
        $truncateSentence = new TruncateSentence();
        $result = $truncateSentence->truncateSentence($str, $len);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ["Hello how are you Contestant", 4, "Hello how are you"],
            ["What is the solution to this problem", 4, "What is the solution"],
            ["chopper is not a tanuki", 5, "chopper is not a tanuki"]
        ];
    }
}
