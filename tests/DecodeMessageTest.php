<?php

namespace App\Tests;

use App\DecodeMessage;
use PHPUnit\Framework\TestCase;

class DecodeMessageTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDecodeMessage(string $key, string $message, string $expected): void
    {
        $decodeMessage = new DecodeMessage();
        $this->assertSame($expected, $decodeMessage->decodeMessage($key, $message));
    }

    public function dataProvider(): array
    {
        return [
            [
                'the quick brown fox jumps over the lazy dog',
                'vkbs bs t suepuv',
                'this is a secret'
            ],
            [
                'eljuxhpwnyrdgtqkviszcfmabo',
                'zwx hnfx lqantp mnoeius ycgk vcnjrdb',
                'the five boxing wizards jump quickly'
            ],
        ];
    }
}
