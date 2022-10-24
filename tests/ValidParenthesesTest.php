<?php

namespace App\Tests;

use App\ValidParentheses;
use PHPUnit\Framework\TestCase;

class ValidParenthesesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsValid(string $str, bool $expected): void
    {
        $validParentheses = new ValidParentheses();
        $result = $validParentheses->isValid($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['(]', false],
            ['()', true],
            ['()[]{}', true],
        ];
    }
}
