<?php

namespace App\Tests;

use App\ToLowerCase;
use PHPUnit\Framework\TestCase;

class ToLowerCaseTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testToLowerCase(): void
    {
        $obj = new ToLowerCase();
        $this->assertSame($obj->toLowerCase('Hello'), 'hello');
        $this->assertSame($obj->toLowerCase('here'), 'here');
        $this->assertSame($obj->toLowerCase('LOVELY'), 'lovely');
    }

    public function dataProvider(): array
    {
        return [
            ['Hello', 'hello'],
            ['here', 'here'],
            ['LOVELY', 'lovely'],
        ];
    }
}
